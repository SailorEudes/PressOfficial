<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment() == 'production') {
            $this->app['request']->server->set('HTTPS', true);
        }
        $this->setSchemaDefaultLength();

        view()->composer('layouts.master', function ($view) {

            $theme = \Cookie::get('theme');

            if ($theme != 'dark-theme' && $theme != 'light') {

                $theme = 'light';
            }

            $view->with('theme', $theme);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    private function setSchemaDefaultLength(): void
    {
        try {
            Schema::defaultStringLength(191);
        } catch (\Exception $exception) {
        }
    }
}
