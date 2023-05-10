<?php

namespace Console\Providers;

use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $namespace = 'Console\\';

    public function register()
    {
        $rootPath = base_path('modules/console/');
    }

    public function boot()
    {
        //
    }
}
