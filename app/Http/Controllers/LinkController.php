<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\Analyticable;
use App\Models\Offer;
use Illuminate\Http\RedirectResponse;
use Jenssegers\Agent\Agent;

class LinkController
{
    use Analyticable;

    public function __construct(private Agent $agent)
    {
    }

    /**
     * Redirect to offer
     */
    public function __invoke(Offer $offer): RedirectResponse
    {
        // Offer not found
        if (! $offer->id) {
            abort(404);
        }

        // Update analytics
        self::analytics($offer);

        return redirect()
            ->to($offer->url);
    }
}
