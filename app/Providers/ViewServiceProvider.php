<?php

namespace App\Providers;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['sub_categories.fields'], function ($view) {
            $categoryItems = Category::pluck('title','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['products.fields'], function ($view) {
            $subcategoryItems = Subcategory::pluck('title','id')->toArray();
            $view->with('subcategoryItems', $subcategoryItems);
        });
        View::composer(['products.fields'], function ($view) {
            $categoryItems = Category::pluck('title','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['products.fields'], function ($view) {
            $categoryItems = Category::pluck('title','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['posts.fields'], function ($view) {
            $userItems = User::pluck('name','id')->toArray();
            $view->with('userItems', $userItems);
        });
        //
    }
}