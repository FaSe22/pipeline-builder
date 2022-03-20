# Build pipelines faster with artisan commands

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fase22/pipeline-builder.svg?style=flat-square)](https://packagist.org/packages/fase22/pipeline-builder)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/fase22/pipeline-builder/run-tests?label=tests)](https://github.com/fase22/pipeline-builder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/fase22/pipeline-builder/Check%20&%20fix%20styling?label=code%20style)](https://github.com/fase22/pipeline-builder/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fase22/pipeline-builder.svg?style=flat-square)](https://packagist.org/packages/fase22/pipeline-builder)

This package will help you to create Pipelines and Pipes faster.


## Installation

You can install the package via composer:

```bash
composer require fase22/pipeline-builder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="pipeline-builder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="pipeline-builder-config"
```

## Usage

After installation, you can easily add new Pipelines using the following command:

```bash
php artisan build:pipeline <name>
```

It will create a Pipelines folder in your app directory.

If you want to add Pipes, just use this command:

```bash
php artisan build:pipe <name>
```

## Credits

- [sebastianfaber](https://github.com/FaSe22)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
