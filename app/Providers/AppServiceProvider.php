<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Models\Logo;
use App\Models\SocialMedia;
use App\Models\Product;
use App\Models\Category;

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
        // Share the following data with all views
        View::composer('*', function ($view) {
            $logo = Logo::first();
            $socialMediaLinks = SocialMedia::all();
            $categories = Category::all();
            $products = Product::all();
            
            // Share data across all views
            $view->with(compact('logo', 'socialMediaLinks', 'categories', 'products'));
        });
    }
}
