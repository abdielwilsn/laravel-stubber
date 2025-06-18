<?php

namespace Stubber\Stubber;

use Illuminate\Support\ServiceProvider;
use Stubber\Stubber\Console\MakeServiceCommand;

class StubberServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/stubber.php', 'stubber');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../stubs' => base_path('stubs'),
                __DIR__.'/../config/stubber.php' => config_path('stubber.php'),
            ], 'stubber');

            $this->commands([
                MakeServiceCommand::class,
            ]);
        }
    }
}
