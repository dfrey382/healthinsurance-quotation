# This package helps health insurance companies to generate customer quotations for their health policies

[![Latest Version on Packagist](https://img.shields.io/packagist/v/digital-steps-creatives/healthinsurance-quotation.svg?style=flat-square)](https://packagist.org/packages/digital-steps-creatives/healthinsurance-quotation)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/digital-steps-creatives/healthinsurance-quotation/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/digital-steps-creatives/healthinsurance-quotation/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/digital-steps-creatives/healthinsurance-quotation/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/digital-steps-creatives/healthinsurance-quotation/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/digital-steps-creatives/healthinsurance-quotation.svg?style=flat-square)](https://packagist.org/packages/digital-steps-creatives/healthinsurance-quotation)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require digital-steps-creatives/healthinsurance-quotation
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="healthinsurance-quotation-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="healthinsurance-quotation-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="healthinsurance-quotation-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$dSCQuotation = new Dsc\DSCQuotation();
echo $dSCQuotation->echoPhrase('Hello, Dsc!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Digital Steps Creatives](https://github.com/dfrey382)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
