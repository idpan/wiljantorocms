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
        Schema::create('contact_phones', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20);
            $table->enum('type', ['office', 'mobile', 'whatsapp']);
            $table->boolean('is_primary')->default(false);
            $table->foreignId('address_id')->nullable()->constrained('contact_addresses')->onDelete('set null');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_phones');
    }
};
