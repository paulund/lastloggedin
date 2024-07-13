# Last Logged In Date

[![Latest Version on Packagist](https://img.shields.io/packagist/v/paulund/lastloggedin.svg?style=flat-square)](https://packagist.org/packages/paulund/lastloggedin)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/paulund/lastloggedin/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/paulund/lastloggedin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/paulund/lastloggedin/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/paulund/lastloggedin/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/paulund/lastloggedin.svg?style=flat-square)](https://packagist.org/packages/paulund/lastloggedin)
<!--delete-->
---
This package will add a new column to the user database table a record the last time a user logged in.
---

## Installation

You can install the package via composer:

```bash
composer require paulund/lastloggedin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish
php artisan migrate
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/paulund)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.