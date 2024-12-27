<?php

use Cheddzy\LaravelPalette\LaravelPalette;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can decode palettes', function () {
    $expectedPalette = [
        [
            "title" => "Test Palette",
            "colors" => [
                0 => ["red" => 255, "green" => 0, "blue" => 0],
                1 => ["red" => 0, "green" => 255, "blue" => 0],
                2 => ["red" => 0, "green" => 0, "blue" => 255],
            ]
        ],
        [
            "title" => "Test Palette",
            "colors" => [
                0 => ["red" => 255, "green" => 0, "blue" => 0],
                1 => ["red" => 0, "green" => 255, "blue" => 0],
                2 => ["red" => 0, "green" => 0, "blue" => 255],
            ]
        ],
    ];

    $decoder = new LaravelPalette();

    $output = $decoder->decode(__DIR__ . '/assets/test.cpal');

    expect($output)->toEqual($expectedPalette);
});

it('can encode palettes', function () {
    $palettes = [
        [
            'title' => 'Test Palette',
            'colors' => [
                ['red' => 255, 'green' => 0, 'blue' => 0],
                ['red' => 0, 'green' => 255, 'blue' => 0],
                ['red' => 0, 'green' => 0, 'blue' => 255],
            ]
        ],
        [
            'title' => 'Test Palette',
            'colors' => [
                ['red' => 255, 'green' => 0, 'blue' => 0],
                ['red' => 0, 'green' => 255, 'blue' => 0],
                ['red' => 0, 'green' => 0, 'blue' => 255],
            ]
        ],
    ];

    $encoder = new LaravelPalette();

    $encoder->encode($palettes, __DIR__ . '/assets/test.cpal');

    $output = $encoder->decode(__DIR__ . '/assets/test.cpal');

    expect($output)->toEqual($palettes);
});
