<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {

            $table->id();
            $table->string('name1')->unique();
            $table->string('name2');
            $table->string('name3');
            $table->string('barcode');
            $table->unsignedSmallInteger('boxAmount');
            $table->unsignedSmallInteger('minInv');
            $table->unsignedSmallInteger('sizes');
            $table->unsignedSmallInteger('weight');
            $table->string('picture');
            $table->boolean('isActive');
            $table->date('expiryDate');
            $table->boolean('isBlocked');
        });
    }





    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
