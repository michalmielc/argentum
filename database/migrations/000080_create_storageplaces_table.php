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
        Schema::create('storageplaces', function (Blueprint $table) {
            $table->id();
            $table->string('barcode',50)->unique();
            $table->unsignedSmallInteger('stillageNo');
            $table->unsignedSmallInteger('shelfNo');
            $table->unsignedSmallInteger('placeNo');
            $table->unsignedSmallInteger('maxHeight');
            $table->decimal('maxWeight',6,3,false);
            $table->unsignedSmallInteger('lane');
            $table->string('name',50)->unique();
            $table->unsignedTinyInteger('accessTime');
            $table->boolean('isActive');
            $table->boolean('onlySingle');
            $table->unsignedTinyInteger('maxAmountOfItems');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storageplaces');
    }
};
