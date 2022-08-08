<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\RedirectResponse;

class LinkController
{
    /**
     * Handle the incoming request
     */
    public function __invoke(Offer $offer): RedirectResponse
    {
        return redirect()->to($offer->url);
    }
}
