<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactPhone;
use App\Models\ContactEmail;
use App\Models\ContactAddresses;
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
            $phone_primary = ContactPhone::where('is_primary',1)->first();
            $email_primary = ContactEmail::all();
            $addresses = ContactAddresses::all(); 

            $social_media = SocialMedia::all();
            $view->with([
                'phone_primary' => $phone_primary,
                'email_primary' => $email_primary,
                'addresses'=>$addresses,
                'social_media' => $social_media,
            ]);
        });
    }
}
