# Package to read my custom file format that holds information about colour palettes. 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cheddzy/laravel-palette.svg?style=flat-square)](https://packagist.org/packages/cheddzy/laravel-palette)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cheddzy/laravel-palette/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cheddzy/laravel-palette/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cheddzy/laravel-palette/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cheddzy/laravel-palette/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cheddzy/laravel-palette.svg?style=flat-square)](https://packagist.org/packages/cheddzy/laravel-palette)

I made a custom color palette file format encoder & decoder for use in Laravel. It encodes RGB color integers to hexadecimal binary, and decodes back into RGB color integers.

This was made for practice, I don't see a real use case for this!

## Installation

You can install the package via composer:

```bash
composer require cheddzy/laravel-palette
```

## Usage

```php
use Cheddzy\LaravelPalette\ColorPalette

$laravelPalette = new ColorPalette();

// Will decode a palette file from a specified location.
$laravelPalette->decode($palette, $path);

// Will encode an example.cpal at a specified location.
$laravelPalette->encode($palette, $path, 'filename');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

PRs are welcome, but please create an issue first if you want to make big changes.

## Credits

- [Shachar MW](https://github.com/cheddzy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
