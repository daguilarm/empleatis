<?php

declare(strict_types=1);

namespace App\Http\Collectors\_Traits;

trait Requestable
{
    /**
     * Get IP for the API
     */
    protected function ip(): string
    {
        return request()->header('User-Agent')
            ? request()->ip()
            : '::1';
    }

    /**
     * Get user agent for the API
     */
    protected function userAgent(): string
    {
        $userAgent = request()->header('User-Agent');

        return $userAgent
            ? urlencode($userAgent)
            : 'Mozilla%2F5.0+%28Macintosh%3B+Intel+Mac+OS+X+10_10_5%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F48.0.2564.103+Safari%2F537.36';
    }
}
