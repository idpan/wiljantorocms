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
        Schema::create('rab_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rab_calculation_id')->constrained('rab_calculations')->onDelete('cascade');
            $table->enum('action', ['created', 'updated', 'sent_to_client']);
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rab_logs');
    }
};
