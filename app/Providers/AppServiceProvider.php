<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

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
        DB::listen(function($sql) {
            $logger = new Logger("sql");
            $logger->pushHandler(new RotatingFileHandler(storage_path("logs/sql.log"), 1, \Monolog\Level::Debug));
            $logger->debug( print_r($sql->bindings, TRUE));
            $logger->debug($sql->sql);
        });
    }
}
