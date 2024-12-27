<?php

use Cheddzy\LaravelPalette\ColorPalette;

it('can decode palettes', function () {
    $expectedPalette = [
        [
            'title' => 'Test Palette',
            'colors' => [
                0 => ['red' => 255, 'green' => 0, 'blue' => 0],
                1 => ['red' => 0, 'green' => 255, 'blue' => 0],
                2 => ['red' => 0, 'green' => 0, 'blue' => 255],
            ],
        ],
        [
            'title' => 'Test Palette',
            'colors' => [
                0 => ['red' => 255, 'green' => 0, 'blue' => 0],
                1 => ['red' => 0, 'green' => 255, 'blue' => 0],
                2 => ['red' => 0, 'green' => 0, 'blue' => 255],
            ],
        ],
    ];

    $decoder = new ColorPalette;

    $output = $decoder->decode(__DIR__.'/assets/test.cpal');

    expect($output)->toEqual($expectedPalette);
});
