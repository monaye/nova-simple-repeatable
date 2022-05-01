<?php

namespace OptimistDigital\NovaSimpleRepeatable;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use OptimistDigital\NovaTranslationsLoader\LoadsNovaTranslations;

class SimpleRepeatableServiceProvider extends ServiceProvider
{
    use LoadsNovaTranslations;

    public function boot()
    {

        $this->loadTranslations(__DIR__ . '/../resources/lang', 'nova-simple-repeatable-field', true);
    }

    public function register()
    {
        //
    }
}
