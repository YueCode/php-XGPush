<?php

namespace YueCode\XGPush;

use Illuminate\Support\ServiceProvider;

class XinGeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('xgpush.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('xgpush',function (){
            return new XinGe();
        });
    }
}
