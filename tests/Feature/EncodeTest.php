<?php

use Cheddzy\LaravelPalette\ColorPalette;

it('can encode palettes', function () {
    $palettes = [
        [
            'title' => 'Test Palette',
            'colors' => [
                ['red' => 255, 'green' => 0, 'blue' => 0],
                ['red' => 0, 'green' => 255, 'blue' => 0],
                ['red' => 0, 'green' => 0, 'blue' => 255],
            ],
        ],
        [
            'title' => 'Test Palette',
            'colors' => [
                ['red' => 255, 'green' => 0, 'blue' => 0],
                ['red' => 0, 'green' => 255, 'blue' => 0],
                ['red' => 0, 'green' => 0, 'blue' => 255],
            ],
        ],
    ];

    $encoder = new ColorPalette;

    $encoder->encode($palettes, __DIR__.'/assets/test.cpal');

    $output = $encoder->decode(__DIR__.'/assets/test.cpal');

    expect($output)->toEqual($palettes);
});
