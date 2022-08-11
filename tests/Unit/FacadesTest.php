<?php

use App\Facades\Metatag\Metatag;

/**
 * Metatag::title()
 */
test('Asserts the Facade Metatags generate the right title for home', function () {

    // Call the facade...
    $metatag = new Metatag();

    // Set the config
    $config = collect([
        'section' => 'home',
    ]);

    // Populate the facade
    $metatag->set($config);

    expect($metatag->title())->toEqual('Buscador de empleo, formación y cursos online.');
});

/**
 * Metatag::title()
 */
test('Asserts the Facade Metatags generate the right title for a full page', function () {

    // Call the facade...
    $metatag = new Metatag();

    // Create a new config
    $config = collect([
        'section' => 'lenguajes',
        'categoryName' => 'Programacion',
        'province'     => 10,
        'provinceName' => 'Madrid',
        'languageName' => 'Java',
    ]);

    // Populate the facade
    $metatag->set($config);

    expect($metatag->title())->toEqual('Bolsa de empleo para Programacion en Madrid especializado en Java.');
});

/**
 * Metatag::description()
 */
test('Asserts the Facade Metatags generate the right description for home', function () {

    // Call the facade...
    $metatag = new Metatag();

    // Set the config
    $config = collect([
        'section' => 'home',
    ]);

    // Populate the facade
    $metatag->set($config);

    expect($metatag->description())->toEqual('Ofertas de trabajo del Metabuscador empleatis.com donde podras buscar trabajos por categorias y por provincia. Accede a nuestra bolsa de empleos seleccionados.');
});

/**
 * Metatag::description()
 */
test('Asserts the Facade Metatags generate the right description for Cookies Policy', function () {

    // Call the facade...
    $metatag = new Metatag();

    // Set the config
    $config = collect([
        'section' => 'legal.cookies',
    ]);

    // Populate the facade
    $metatag->set($config);

    expect($metatag->description())->toEqual('Política de cookies de empleatis.com. Ofertas de empleo y formación. Accede a nuestra bolsa de trabajo, donde podrás encontrar el trabajo que estás buscando.');
});

/**
 * Metatag::description()
 */
test('Asserts the Facade Metatags generate the right description for a full page', function () {

    // Call the facade...
    $metatag = new Metatag();

    // Create a new config
    $config = collect([
        'section' => 'lenguajes',
        'categoryName' => 'Programacion',
        'province'     => 10,
        'provinceName' => 'Madrid',
        'languageName' => 'Java',
    ]);

    // Populate the facade
    $metatag->set($config);

    expect($metatag->description())->toEqual('¿Quieres pogramar en Java? Accede a nuestras ofertas de trabajo de Programacion en Madrid, donde podrás encontrar el trabajo que estás buscando programando en Java.');
});
