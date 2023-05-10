<?php

namespace Console\Lib;


trait RegisterCommandProviderTrait
{
    protected function registerConsoleCommands(array $commandClasses)
    {
        if (app()->runningInConsole()) {
            \Illuminate\Console\Application::starting(function ($artisan) use ($commandClasses) {
                $artisan->resolveCommands($commandClasses);
            });
        }
    }
}
