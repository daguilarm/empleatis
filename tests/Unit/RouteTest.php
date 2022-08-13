<?php

test('Asserts home is working')->get('/')->assertStatus(200);
test('Asserts categories are working')->get('/categories/programador/18')->assertStatus(200);
test('Asserts provinces are working')->get('/categories/programador/18/madrid/10')->assertStatus(200);
test('Asserts languages are working')->get('/categorias/programador/18/lenguaje/java/3')->assertStatus(200);
test('Asserts search are working')->get('/search?search=laravel&locations=madrid&ogp=0ee17c05fbdbe17fde6adcb12270593a&ctp=17f7076e-a428-4f66-bdf9-56c105c82a15&tmp=JfpJtYqs34-33282-Q1&mts=e791WUVR7LnuPyU9vTFKpODQlD2wcyCsLJZXBixtH1TBG9btu0apDYkvfBWwmRWU5hZgmFy2axmt8Bh9OVnzgHRfF21fPErIWHekU85dmEcDRkE')->assertStatus(200);
test('Asserts search (with url manipulation) are not working')->get('/search?search=laravel&locations=madrid&ogp=0ee17c05fbdbe17fde6ad593a&ctp=17f7076e-a428-4f66-bdf9-56c105c82a15&tmp=JfpJtYqs34-33282-Q1&mts=e791WUVR7LnuPyU9vTFKpODQlD2wcyCsLJZXBixtH1TBG9btu0apDYkvfBWwmRWU5hZgmFy2axmt8Bh9OVnzgHRfF21fPErIWHekU85dmEcDRkE')->assertStatus(401);
test('Asserts Legal is working')->get('/legal/aviso-legal')->assertStatus(200);
test('Asserts Legal Cookies is working')->get('/legal/politica-cookies')->assertStatus(200);
test('Asserts Legal Privacity is working')->get('/legal/politica-privacidad')->assertStatus(200);
