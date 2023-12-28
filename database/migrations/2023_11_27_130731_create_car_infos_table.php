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
        Schema::create('car_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('base_car')->nullable();
            $table->text('vin')->nullable();
            $table->text('exterior_color')->nullable();
            $table->text('interior_color')->nullable();
            $table->text('mb_code')->nullable();
            $table->text('rep')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_infos');
    }
};
