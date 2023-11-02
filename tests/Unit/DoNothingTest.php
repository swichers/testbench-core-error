<?php

declare(strict_types=1);

namespace Swichers\TestbenchCoreError\Tests\Unit;

use Swichers\TestbenchCoreError\Tests\TestCase;

class DoNothingTest extends TestCase
{

    public function test_doesnt_matter(): void
    {
        $this->assertDatabaseEmpty('doesnt_matter');
    }
}
