<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Offer;
use Jenssegers\Agent\Agent;
use Illuminate\Http\RedirectResponse;

class LinkController
{
    public function __construct(private Agent $agent) {}

    /**
     * Redirect to offer
     */
    public function __invoke(Offer $offer): RedirectResponse
    {
        // Offer not found
        if(!$offer?->id) {
            abort(404);
        }

        // Update analytics
        $this->analytics($offer);

        return redirect()->to($offer->url);
    }

    /**
     * Update analytics
     */
    private function analytics(Offer $offer): void
    {
        // Set the referer id
        $referer = md5(request()->ip());

        // Check in the database
        $checkValue = Link::query()
            ->where('offer_id', $offer->id)
            ->where('referer', $referer)
            ->get();

        // Dont repeat analytics
        if($checkValue->count() <= 0) {
            // Link analytics
            Link::create([
                'device_type' => $this->agent->isDesktop() ? 'Desktop' : 'Device',
                'device_name' => $this->agent->device() ?? 'Desktop',
                'robot' => $this->agent->isRobot() ? $this->agent->robot() : null,
                'platform' => $this->agent->platform(),
                'browser' => $this->agent->browser(),
                'offer_id' => $offer->id,
                'category_id' => $offer->category_id,
                'language_id' => $offer->language_id,
                'referer' => $referer,
            ]);
        }
    }
}
