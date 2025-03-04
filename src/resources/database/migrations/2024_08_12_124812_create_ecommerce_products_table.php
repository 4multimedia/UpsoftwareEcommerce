<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ecommerce_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->json('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ecommerce_products');
    }
};