# Laravel Client for echoip

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sicaboy/echoip-laravel.svg?style=flat-square)](https://packagist.org/packages/sicaboy/echoip-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sicaboy/echoip-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sicaboy/echoip-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sicaboy/echoip-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sicaboy/echoip-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sicaboy/echoip-laravel.svg?style=flat-square)](https://packagist.org/packages/sicaboy/echoip-laravel)

Laravel Client for [echoip](https://github.com/sicaboy/echoip)

## Installation

You can install the package via composer:

```bash
composer require sicaboy/echoip-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="echoip-laravel-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('ECHOIP_API_KEY'),
    'api_url' => env('ECHOIP_API_URL', 'https://echoip.yourdomain.com'),
];
```

## Usage

```php
use Sicaboy\EchoipLaravel\Facades\Echoip;

EchoipLaravel::getInfo('1.1.1.1');
EchoipLaravel::getInfo(request()->ip())
```

You will get the country code of the IP address.

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

- [sicaboy](https://github.com/sicaboy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
