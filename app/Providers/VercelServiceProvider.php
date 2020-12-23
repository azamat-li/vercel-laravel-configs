<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class VercelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    $this->publishes([
            'vendor/serverless/vercel_laravel/vercel.json' => config_path('../vercel.json'),
            'vendor/serverless/vercel_laravel/api/index.php' => config_path('../api/index.php')
	    ], 'config');
    }
}
