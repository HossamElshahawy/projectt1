<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\HeaderComposer;
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
        View::composer('front.artical.blogs', HeaderComposer::class);
        View::composer('front.magazine.magazine', HeaderComposer::class);
        View::composer('front.plans.plans', HeaderComposer::class);
        View::composer('Front\artical\blog-details', HeaderComposer::class);
        View::composer('Front.course.coursedetails', HeaderComposer::class);
        View::composer('Front.Socialmedia.profile', HeaderComposer::class);

    }

}
