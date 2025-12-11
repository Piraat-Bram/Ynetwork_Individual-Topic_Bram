<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Attach locale and available locales to any partial view under `partials`
        view()->composer('partials.*', function ($view) {
            // allow switching via ?locale=xx (immediate) and persist to session when present
            if (request()->has('locale')) {
                app()->setLocale(request()->get('locale'));
                try {
                    session()->put('locale', request()->get('locale'));
                } catch (\Exception $e) {
                    // ignore session write failures during view render
                }
            }

            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
