<?php

use Accolon\Out\Components\Tag;

test('should return string HTML1', function () {
    $comp = new Tag('h1', 'Oi');
    expect($comp->render())->toBe('<h1>Oi</h1>');
});
