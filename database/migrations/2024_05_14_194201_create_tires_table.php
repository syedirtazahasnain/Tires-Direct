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
        Schema::create('tires', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->index();
            $table->string('title')->nullable()->index();
            $table->integer('sku')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('price_id')->nullable();
            $table->unsignedBigInteger('tire_specs_id')->nullable();
            $table->unsignedBigInteger('discount_id')->nullable();
            $table->jsonb('feature')->nullable();
            $table->integer('inventory')->nullable();
            $table->boolean('in_stock')->default(0)->comment('0-no_stock ~ 1-in_stock');
            $table->boolean('is_discount')->default(0)->comment('0-no_discount ~ 1-discounted');
            $table->longText('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tires');
    }
};
