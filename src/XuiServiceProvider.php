<?php

namespace Xui;

use Illuminate\Support\ServiceProvider;

class XuiServiceProvider extends ServiceProvider
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
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'xui');

        $this->loadViewComponentsAs('xui', []);

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/xui'),
        ], 'xui-views');
    }
}