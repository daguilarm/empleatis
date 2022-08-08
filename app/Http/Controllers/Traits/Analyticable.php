<?php

namespace App\Http\Controllers\Traits;

use App\Models\Link;
use App\Models\Offer;

trait Analyticable
{
    /**
     * Update analytics
     */
    private function analytics(Offer $offer): void
    {
        // Set the values
        $referer = md5(request()->ip());
        $uuid = $offer->id;

        // Check in the database
        $checkValue = Link::isInDatabase($uuid, $referer);

        // Dont repeat analytics
        if ($checkValue->count() <= 0) {
            // Link analytics
            Link::create([
                'offer_id' => $offer->id,
                'referer' => $referer,
                'device_type' => $this->deviceType(),
                'device_name' => $this->deviceName(),
                'robot' => $this->isRobot(),
                'platform' => $this->agent->platform(),
                'browser' => $this->agent->browser(),
                'category_id' => $offer->category_id,
                'language_id' => $offer->language_id,
                'province_id' => $offer->province_id,
                'salary_year' => $this->salary($offer),
                'ranking' => $offer->ranking,
                'workday_type' => $offer->workday_type,
            ]);
        }
    }

    /**
     * Get the device type
     */
    private function deviceType(): string
    {
        return match (true) {
            $this->agent->isMobile() => 'Mobile',
            $this->agent->isTablet() => 'Tablet',
            default => 'Desktop'
        };
    }

    /**
     * Get the device name
     */
    private function deviceName(): string
    {
        return $this->agent->device() ?? 'Desktop';
    }

    /**
     * Get the device type
     */
    private function isRobot(): string
    {
        return $this->agent->isRobot()
            ? $this->agent->robot()
            : null;
    }

    /**
     * Get the device type
     */
    private function salary(Offer $offer): string
    {
        return $offer->salary_year > 0
            ? $offer->salary_year
            : null;
    }
}
