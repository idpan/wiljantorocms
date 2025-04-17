<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // home, about, project
            $table->string('title')->nullable(); // untuk title halaman
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
