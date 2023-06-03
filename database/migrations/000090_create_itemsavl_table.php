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
        Schema::create('itemsavl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('itemid')->constrained(table:'items',column:'id');
            $table->unsignedMediumInteger('currentAmount');
            $table->unsignedMediumInteger('maxAmount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itemsavl');
    }
};
