<?php

namespace pdffiller\LibLaravelEnvToConsul;

use Illuminate\Support\ServiceProvider;
use pdffiller\LibLaravelEnvToConsul\Console\Commands\ConsulConfig;

class ConsulConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (strpos(php_sapi_name(), 'cli') !== false) {
            $this->commands([
                ConsulConfig::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    protected $commands = [
        ConsulConfig::class,
    ];
    public function register()
    {
        $this->commands($this->commands);
    }
}
