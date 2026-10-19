<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promo_car', function (Blueprint $table) {
            $table->foreignId('promo_id')->constrained()->cascadeOnDelete();
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();
            $table->primary(['promo_id', 'car_id']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('promo_car');
    }
};
