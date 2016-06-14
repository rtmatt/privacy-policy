<?php

namespace RTPrivacyPolicy\Providers;

use Illuminate\Support\ServiceProvider;

class PrivacyPolicyServiceProvider extends ServiceProvider
{

    /**
     * Load views from directory
     * Publish Configuration File - php artisan vendor:publish --provider="RTPrivacyPolicy\Providers\PrivacyPolicyServiceProvider" --tag="config"
     * Merge Configs
     * Register Route
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'rtprivacypolicy');
        $this->publishes([ __DIR__ . '/../config/rtprivacy-policy.php' => config_path('rtprivacy-policy.php') ],
            'config');
        $this->mergeConfigFrom(__DIR__ . '/../config/rtprivacy-policy.php', 'rtprivacy-policy');
        if (config('rtprivacy-policy.register_route')) {
            \Route::get('/privacy-policy', function () {
                return view('rtprivacypolicy::privacy-policy', config('rtprivacy-policy'));
            });
        }
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
