<?php

use Laravel\Dusk\Browser;

/**
 * Saved
 */
test('App can save an offer and store into a cookie', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('Buscador de empleo y formación')
            ->assertSourceHas('id="button-5d2d13a4-01aa-446e-a37d-55dd29100af0"')
            ->press('#button-5d2d13a4-01aa-446e-a37d-55dd29100af0')
            ->waitFor('#button-saved-5d2d13a4-01aa-446e-a37d-55dd29100af0')
            ->assertCookieValue('empleatis-saved', '["5d2d13a4-01aa-446e-a37d-55dd29100af0"]');
    });
});
