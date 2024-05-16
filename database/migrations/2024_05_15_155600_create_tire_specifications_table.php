<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tire_specifications', function (Blueprint $table) {
            $table->id();
            $table->double('width')->nullable()->index();
            $table->double('aspect_ratio')->nullable()->index();
            $table->double('overall_diameter')->nullable()->index();
            $table->double('rim_diameter')->nullable()->index();
            $table->string('size')->nullable()->index();
            $table->string('speed_rating')->nullable();
            $table->string('mpn')->nullable();
            $table->string('model')->nullable()->index();
            $table->enum('season', ['summer', 'winter','autumn','spring','all'])->nullable()->index();
            $table->double('price')->nullable()->index();
            $table->string('load_index')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('mileage')->nullable();
            $table->string('utqg')->nullable();
            $table->string('run_flat')->nullable();
            $table->string('load_range')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tire_specifications');
    }
};
