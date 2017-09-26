<?php

namespace mypackage;

use Illuminate\Support\ServiceProvider;
use mypackage\Console\Commands\NewCommand;

class NewCommandServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    protected $commands = [
        NewCommand::class,
    ];
    public function register()
    {
        $this->commands($this->commands);
    }
}
