## Installation

Laravel DigitalOcean requires [PHP](https://php.net) 7.2-8.1. This particular version supports Laravel 8-9.

To install the latest version, simple require this package using [Composer](https://getcomposer.org). Currently the only working adapter is CURL.

```bash
$ composer require "veryard/laravel-vultr"
```

Once installed, if you are not using automatic package discovery, then you need to register the `Vultr\Laravel\VultrServiceProvider` service provider in your `config/app.php`.

You can also optionally alias our facade:

```php
        'Vultr' => Vultr\Laravel\Facades\Vultr::class,
```

## Configuration

Laravel Vultr requires connection configuration

To get start, you'll need to pubish the vendor assets:
```bash
$ php artisan vendor:publish --provider="Vultr\Laravel\VultrServiceProvider"
```

This will create a `config/vultr.php` file in your app, you will need to add the following to your `.ENV`
```
VULTR_API_TOKEN="YOUR_TOKEN"
```
