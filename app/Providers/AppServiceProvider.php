<?php

namespace App\Providers;

use App\Form;
use App\FormChecking;
use App\FormMailer;
use App\IForm;
use App\IFormChecking;
use App\IMailer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IForm::class, Form::class);
        $this->app->bind(IMailer::class, FormMailer::class);
        $this->app->bind(IFormChecking::class, FormChecking::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
