<?php

namespace Vultr\Laravel;

use Vultr\Client;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;

class VultrServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $source = realpath($raw = __DIR__.'/../config/vultr.php') ?: $raw;

        if($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('vultr.php')]);
        } 

        $this->mergeConfigFrom($source, 'vultr');
    }

    public function register()
    {
        $this->app->singleton(Client::class, function (Container $app) {
            return new Client(
                $app->make('config')->get('vultr.api_token')
            );
        });

        $this->app->alias(Client::class, 'vultr');
    }

    public function provides()
    {
        return [
            'vultr'
        ];
    }
}
