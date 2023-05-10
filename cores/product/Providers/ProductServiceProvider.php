<?php

namespace Product\Providers;

use Console\Lib\RegisterCommandProviderTrait;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Product\Console\Commands\OptimizeImg;

class ProductServiceProvider extends ServiceProvider
{
    use RegisterCommandProviderTrait;

    protected $namespace = 'Product\\';

    public function register()
    {
        $rootPath = base_path('cores/product/');
        $this->mergeConfigFrom($rootPath . 'config.php', 'product');
        $this->loadMigrationsFrom([$rootPath . 'DB/migrations']);

        $this->registerConsoleCommands([
            OptimizeImg::class
        ]);

        Route::prefix('api/product')
            ->middleware('auth:api')
            ->namespace($this->namespace)
            ->group($rootPath . 'router.php');
    }

    public function boot()
    {
        //
    }
}
