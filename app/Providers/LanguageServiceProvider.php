<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }
    }
}
