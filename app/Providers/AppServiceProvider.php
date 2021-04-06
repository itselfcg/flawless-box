<?php

namespace App\Providers;

use App\Http\Controllers\AddressController;
use App\Models\Account;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {

        view()->composer('*', function($view){
            $view->with('user', Auth::user());
        });


        view()->composer(['/home-subviews/address','/home-subviews/address-edit'], function($view) {
            $address= new AddressController();
            $userId=Auth::id();
            $userAddress=$address->editByUser($userId);
            $view->with('address', $userAddress);
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
}
