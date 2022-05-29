<?php

namespace App\Providers;

use Illuminate\Support\Pluralizer;
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
        // Blade::withoutDoubleEncoding();

        Schema::defaultStringLength(191);
        $this->publishes([
        __DIR__.'/path/to/assets' => public_path('vendor/yourpackagename'),
        __DIR__.'/public/assets' => public_path('vendor/guzanet/fontawesome'),
    ], 'public');
        // You may instruct Laravel's "pluralizer", which is used by Eloquent and other portions of the framework to convert singular strings to plural strings, to use a language other than English. This may be accomplished by invoking the useLanguage method within the boot method of one of your application's service providers. The pluralizer's currently supported languages are: french, norwegian-bokmal, portuguese, spanish, and turkish:
        // Pluralizer::useLanguage('spanish');
    }
}
