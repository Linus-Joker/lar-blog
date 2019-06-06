<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Model\blog;

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
        $items = blog::orderBy('article_id', 'desc')->take(5)->get();
        view()->share('key', $items);
    }
}
