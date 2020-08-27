<?php

namespace Tuhin\SendMail;
use Illuminate\Support\ServiceProvider;


class ContactServiceProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/config/sendmail.php' => config_path('sendmail.php')
        ]);
    }

    public function register(){
        
    }
}