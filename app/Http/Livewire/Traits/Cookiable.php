<?php

declare(strict_types=1);

namespace App\Http\Livewire\Traits;

use Illuminate\Support\Facades\Cookie;

trait Cookiable
{
    protected int $lifetime = 60 * 24 * 30;

    /**
     * Get the current cookie
     */
    private function getCookie(): array
    {
        $cookie = Cookie::get(config('cookie.offers')) ?? json_encode([]);

        return json_decode($cookie);
    }
}
