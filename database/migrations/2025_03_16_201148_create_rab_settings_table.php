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
        Schema::create('rab_settings', function (Blueprint $table) {
            $table->id();
            $table->enum('project_type', ['rumah', 'ruko', 'jalan', 'renovasi']);
            $table->decimal('price_standard', 15, 2);
            $table->decimal('price_premium', 15, 2);
            $table->decimal('tax_percentage', 5, 2);
            $table->decimal('overhead_percentage', 5, 2);
            $table->decimal('profit_margin', 5, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rab_settings');
    }
};
