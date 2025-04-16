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
        Schema::create('rab_calculations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('phone', 20);
            $table->string('email', 255)->nullable();
            $table->enum('project_type', ['rumah', 'ruko', 'jalan', 'renovasi']);
            $table->enum('specification', ['standard', 'premium']);
            $table->decimal('building_area', 10, 2);
            $table->decimal('base_cost', 15, 2);
            $table->decimal('tax_amount', 15, 2);
            $table->decimal('overhead_amount', 15, 2);
            $table->decimal('profit_amount', 15, 2);
            $table->decimal('total_estimated_cost', 15, 2);
            $table->enum('status', ['pending', 'sent', 'followed_up']);
            $table->string('tracking_code', 20);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rab_calculations');
    }
};
