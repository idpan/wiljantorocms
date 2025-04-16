<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rab_configurations', function (Blueprint $table) {
            $table->id();
            $table->enum('default_calculator_mode', ['simple', 'advanced']);
            $table->decimal('default_price_per_m2', 15, 2);
            $table->boolean('allow_material_selection')->default(false);
            $table->boolean('enable_tax')->default(false);
            $table->boolean('enable_overhead')->default(false);
            $table->boolean('enable_profit_margin')->default(false);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rab_configurations');
    }
};
