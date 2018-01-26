<?php

namespace MichaelJBerry\Summernote;

use Illuminate\Support\ServiceProvider;

class SummernoteServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . "/Assets" => public_path("summernote")], "public");
        $this->loadMigrationsFrom(__DIR__ . "/Migrations");
        $this->loadViewsFrom(__DIR__ . "/Views", "summernote");
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}