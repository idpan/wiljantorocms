<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactPhone;
use App\Models\ContactEmail;
use App\Models\SocialMedia;

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
        $menuItems = [
            ['title' => 'Home', 'link' => '/'],
            ['title' => 'Tentang Kami', 'link' => '/about'],
            ['title' => 'Proyek', 'link' => '/projects'],
            ['title' => 'Kontak', 'link' => '/contact'],
        ];

        View::share('menuItems',$menuItems);

        View::composer('*', function ($view) {
            $phone = ContactPhone::all();
            $email = ContactEmail::all();
            $social_media = SocialMedia::all();
    
            $view->with([
                'phone' => $phone,
                'email' => $email,
                'social_media' => $social_media,
            ]);
        });
    }
}
