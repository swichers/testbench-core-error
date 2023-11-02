<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericTable extends Migration
{
    public function up()
    {
        Schema::create('doesnt_matter', function (Blueprint $table) {
            $table->id();
        });
    }
}
