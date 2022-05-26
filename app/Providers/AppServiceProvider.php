<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // De forma predeterminada, Blade (y el asistente de Laravel ) codificarán dos veces las entidades HTML. Si desea deshabilitar la codificación doble, llame al Blade::withoutDoubleEncoding método desde el boot método de su AppServiceProvider:
        Blade::withoutDoubleEncoding();

        Schema::defaultStringLength(191);
        $this->publishes([
        __DIR__.'/path/to/assets' => public_path('vendor/yourpackagename'),
        __DIR__.'/public/assets' => public_path('vendor/guzanet/fontawesome'),
    ], 'public');
    }
}
