<?php

/**
 * filter_workday(array $data)
 */
test('asserts helper method filter_workday(array $data) change the array', function () {

    // Base values
    $config = [
        1 => 'Temporal', // We want to change this
        2 => 'Parcial',
        3 => 'Completa',
    ];

    $filter = filter_workday($config);

    expect($filter[1])->toEqual('Temporal/por horas');
});

/**
 * get_data(?string $data, ?string $alternative = null)
 * default_data()
 */
test('asserts helper method get_data(?string $data, ?string $alternative = null) has a default value and it is correct', function () {

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
test('asserts helper method to_slug(?string $value) format correctly the string', function () {

    // Base values
    $data = 'En un lugar de la MAncha';

    // String format
    expect(to_slug($data))->toEqual('en-un-lugar-de-la-mancha');
});

/**
 * to_title(?string $value)
 */
test('asserts helper method to_title(?string $value) format correctly the string', function () {

    // Base values
    $data = 'en-un-lugar-de-la-mancha';

    // String format
    expect(to_title($data))->toEqual('En Un Lugar De La Mancha');
});


