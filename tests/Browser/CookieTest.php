<?php

use Laravel\Dusk\Browser;

/**
 * Saved
 */
test('App can accept cookies', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertHasCookie('laravel_session', false)
            ->assertHasCookie('XSRF-TOKEN', false)
            ->assertCookieMissing('gdprcookienotice')
            ->assertCookieMissing('_ga_15724SG04X')
            ->assertCookieMissing('_ga')
            ->waitFor('.gdpr-cookie-notice-nav')
            ->pause(1500)
            ->click('@gdpr-accept')
            ->assertHasCookie('gdprcookienotice', false)
            ->assertHasCookie('_ga_15724SG04X', false)
            ->assertHasCookie('_ga', false);
    });
});
