<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Schema::create('languages', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});
