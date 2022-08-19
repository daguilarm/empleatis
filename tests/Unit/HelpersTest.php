<?php

use Database\Seeders\CategorySeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

/**
 * filter_workday(array $data)
 */
test('Asserts helper method filter_workday(array $data) change the array', function () {

    // Get the values
    $filter = filter_workday(config('empleatis.workday_type'));

    expect($filter[1])->toEqual('Temporal/por horas');
});

/**
 * get_data(?string $data, ?string $alternative = null)
 * default_data()
 */
test('Asserts helper method get_data(?string $data, ?string $alternative = null) has a default value and it is correct', function () {

    // Base values
    $data = get_data(null);

    // Default value
    expect(default_data())->toEqual('&#8208;');

    // When no value, set the default value
    expect($data)->toEqual(default_data());
});

/**
 * to_slug(?string $value)
 */
test('Asserts helper method to_slug(?string $value) format correctly the string', function () {

    // Base values
    $data = 'En un lugar de la MAncha';

    // String format
    expect(to_slug($data))->toEqual('en-un-lugar-de-la-mancha');
});

/**
 * to_title(?string $value)
 */
test('Asserts helper method to_title(?string $value) format correctly the string', function () {

    // Base values
    $data = 'en-un-lugar-de-la-mancha';

    // String format
    expect(to_title($data))->toEqual('En Un Lugar De La Mancha');
});

/**
 * from_search()
 */
test('Asserts helper method from_search() generate the correct text base on the request', function () {

    // Do the request
    $this->get('/?search=laravel&locations=murcia');

    // String format
    expect(from_search())
        ->toEqual('Resultados de búsqueda para <span class="text-red-800 font-bold">Laravel</span> en <span class="text-red-800 font-bold">Murcia</span>');

    // Do the request
    $this->get('/?search=laravel');

    expect(from_search())
        ->toEqual('Resultados de búsqueda para <span class="text-red-800 font-bold">Laravel</span>');
});

/**
 * to_workday(string $data, array $result = [])
 */
test('Asserts helper method to_workday() generate the correct field to be store in DB', function () {
    expect(to_workday('1,3'))->toEqual('Temporal, Completa');
    expect(to_workday('2'))->toEqual('Parcial');
});

/**
 * rute_to_category(?object $category)
 */
test('Asserts helper method rute_to_category() generate the correct url', function () {
    // Seed the database
    $this->seed(CategorySeeder::class);

    // Get the category
    $category = \App\Models\Category::find(1);

    expect(rute_to_category($category))
        ->toEqual('http://empleatis.test/categorias/jefe-de-proyecto/1');
});

/**
 * rute_to_language(?object $language)
 */
test('Asserts helper method rute_to_language() generate the correct url', function () {

    // Seed the database
    $this->seed(LanguageSeeder::class);

    // Get the category
    $language = \App\Models\Language::find(1);

    expect(rute_to_language($language))
        ->toEqual('http://empleatis.test/categorias/programador/18/lenguaje/python/1');
});

/**
 * link_out(string $uuid)
 */
test('Asserts helper method link_out() generate the correct link out', function () {
    // Get the value
    $uuid = str()->uuid();

    expect(link_out($uuid))->toEqual('http://empleatis.test/links/reference/'.$uuid);
});

/**
 * active_url(?object $config, string $remove = 'none')
 */
test('Asserts helper method active_url() generate the correct url', function () {
    // Create a request
    $config = collect([
        'category' => 18,
        'categoryNameSlug' => 'programador',
        'province' => 10,
        'provinceNameSlug' => 'madrid',
        'language' => 3,
        'languageNameSlug' => 'java',
    ]);

    expect(active_url($config, 'category'))->toEqual('http://empleatis.test/categorias/madrid/10');
});
