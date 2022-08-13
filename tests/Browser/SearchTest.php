<?php

use Laravel\Dusk\Browser;

/**
 * Search
 */
test('App can search for categories and locations', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertSee('Buscador de empleo y formación')
            ->type('@search-by-category', 'laravel')
            ->type('@search-by-location', 'madrid')
            ->press('@search-submit')
            ->waitForText('Resultados de búsqueda para Laravel en Madrid')
            ->assertSourceHas('id="element-p-0-1"')
            ->assertSourceMissing('id="element-p-0-2"')
            ->clear('@search-by-location')
            ->press('@search-submit')
            ->waitForText('Resultados de búsqueda para Laravel')
            ->assertSourceHas('id="element-p-0-9"')
            ->assertSourceMissing('id="element-p-0-10"');
    });
});
