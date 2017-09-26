<?php

namespace mypackage;

use Illuminate\Support\ServiceProvider;
use vagrant\mypackage\Console\Commands\NewCommand;

class NewCommandServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                NewCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    /*protected $commands = [
        NewCommand::class,
    ];*/
    public function register()
    {
        //s$this->commands($this->commands);
    }
}
