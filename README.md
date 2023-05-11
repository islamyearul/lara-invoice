# This is my package lara-invoice

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yearul/lara-invoice.svg?style=flat-square)](https://packagist.org/packages/yearul/lara-invoice)
<!-- [![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/yearul/lara-invoice/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/yearul/lara-invoice/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/yearul/lara-invoice/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/yearul/lara-invoice/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain) -->
[![Total Downloads](https://img.shields.io/packagist/dt/yearul/lara-invoice.svg?style=flat-square)](https://packagist.org/packages/yearul/lara-invoice)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require yearul/lara-invoice
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lara-invoice-config"
```

This is the contents of the published config file:

```php
return [

    /* 
    |--------------------------------------------------------------------------
    | Invoice NO Generator Config
    |--------------------------------------------------------------------------
    |
    | This is the config file for Invoice NO generator. You can override
    | this config file by placing it in your application's config directory
    | and change the values as per your need.
    |
    */

     /*
    |--------------------------------------------------------------------------
    | Default Pad Length
    |--------------------------------------------------------------------------
    |
    | If no  pad length is provided to the generate method, this value will be used
    |
    */
    "pad_len" => 5,

    /*
    |--------------------------------------------------------------------------
    | Default Prefix
    |--------------------------------------------------------------------------
    |
    | If no prefix is provided to the generate method, this value will be used
    |
    */
    "prefix" => "YEA",
    /*
    |--------------------------------------------------------------------------
    | Default year and year_val
    |--------------------------------------------------------------------------
    |
    | If no year and year_val is provided to the generate method, this value will be used
    |
    */

    "year" => true,
    "year_val" => date('Y'),

    /*
    |--------------------------------------------------------------------------
    | Default  pad string
    |--------------------------------------------------------------------------
    |
    | If no pad string is provided to the generate method, this value will be used
    |
    */

    "pad_string" => 0,   // 0, #, *, $.......etc
    /*
    |--------------------------------------------------------------------------
    | Default  pad_direction
    |--------------------------------------------------------------------------
    |
    | If no pad_direction is provided to the generate method, this value will be used
    |
    */

    "pad_direction" => STR_PAD_LEFT,   // STR_PAD_LEFT, STR_PAD_RIGHT

];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lara-invoice-views"
```

## Usage

```php
use Yearul\LaraInvoice\LaraInvoice; // import this in the top of the class
 $value = Yearul\LaraInvoice::generate(2); // 2 is input value
echo $value;
//Generate Method
//  generate($input,  $pad_len = null, $pad_string = null, $prefix = null, $year = null)
 // the generate method received 5 value, $input value is mandatory and others value not mandatory( thoes can get from config file)

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [islamyearul](https://github.com/islamyearul)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
