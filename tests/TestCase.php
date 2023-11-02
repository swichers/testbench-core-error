<?php

declare(strict_types=1);

namespace Swichers\TestbenchCoreError\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Swichers\TestbenchCoreError\Providers\TestbenchCoreErrorProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * @inheritdoc
     */
    protected function getPackageProviders($app): array
    {
        return array_merge(
            parent::getPackageProviders($app),
            [
                TestbenchCoreErrorProvider::class,
            ]
        );
    }
}
