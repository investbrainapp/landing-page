<?php

namespace Investbrain\LandingPage;

use Illuminate\Support\ServiceProvider;

class LandingPageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'landing-page');
    }
}
