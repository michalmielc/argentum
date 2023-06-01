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
            $table->string('name2')->nullable();
            $table->string('name3')->nullable();
            $table->string('barcode')->unique();
            $table->unsignedSmallInteger('boxAmount');
            $table->unsignedSmallInteger('minInv');
            $table->string('sizes');
            $table->unsignedSmallInteger('weight');
            $table->string('picture')->nullable();
            $table->boolean('isActive');
            $table->date('expiryDate')->nullable();
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
