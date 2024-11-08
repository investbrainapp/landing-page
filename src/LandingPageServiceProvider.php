<?php

namespace Investbrain\LandingPage;

use Illuminate\Support\ServiceProvider;

class LandingPageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'landing-page');

        $this->publishes([
            __DIR__.'/../resources/images/og.png' => public_path('og.png'),
        ], 'landing-page-og');
    }
}
