<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('strong_password', function($attribute, $value, $parameters)
          {
          //capital and num
          if (preg_match('/[A-Z0-9]/', $value) == false)
          {
              return false;
          }
          //special char
          if (preg_match('/[^\da-zA-Z]/', $value) == false)
          {
              return false;
          }
          return true;
          });

        Validator::extend('digits_validation', function($attribute,$value,$parameters)
        {
          //only digits(temporary tho(final product is going to be in the +234 format))
          if (preg_match('/\+?^[\d+]$ /', $value) == false)
          {
            return false;
          }
          //length of input
          if(preg_match('/[\d{15}]/', $value) == false)
          {
            return false;
          }
          return true;
          });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
