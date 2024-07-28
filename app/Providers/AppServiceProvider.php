<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        Schema::defaultStringLength(191);
        if (env('APP_ENV') === 'production') {
//        if (env('APP_ENV') === 'development') {
                    $url = \Request::url();
                    $check = strstr($url, "http://");
                    if ($check) {
                      $newUrl = str_replace("http", "https", $url);
                      header("Location:" . $newUrl);
                    }
                  }
        view()->composer('partials.language_switcher', function($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }


}
