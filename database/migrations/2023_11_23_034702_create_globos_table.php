<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('globos', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('bano');
            $table->smallInteger('ducha');
            $table->smallInteger('tomar');
            $table->smallInteger('lavar');
            $table->smallInteger('producto');
            $table->smallInteger('ducha_mes');
            $table->smallInteger('tomar_mes');
            $table->smallInteger('lavar_mes');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('globos');
    }
};
