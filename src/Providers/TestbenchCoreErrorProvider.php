<?php

namespace Swichers\TestbenchCoreError\Providers;

use Illuminate\Support\ServiceProvider;

class TestbenchCoreErrorProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->publishes([__DIR__ . '/../../database' => database_path()], 'migrations');
    }
}
