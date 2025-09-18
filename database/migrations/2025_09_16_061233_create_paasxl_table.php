<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('paasxl', function (Blueprint $table) {

            // Sesuaikan kolom yang kamu butuhkan
            $table->string('COL1')->nullable();
            $table->string('COL2')->nullable();
            $table->string('COL3')->nullable();
            $table->string('COL4')->nullable();
            $table->string('COL5')->nullable();
            $table->string('COL6')->nullable();
            $table->string('COL7')->nullable();
            $table->string('COL8')->nullable();
            $table->string('COL9')->nullable();
            $table->string('COL10')->nullable();
            $table->string('COL11')->nullable();
            $table->string('COL12')->nullable();
            $table->string('COL13')->nullable();
            $table->string('COL14')->nullable();
            $table->string('COL15')->nullable();
            $table->string('COL16')->nullable();
            $table->string('COL17')->nullable();
            $table->string('COL18')->nullable();
            $table->string('COL19')->nullable();
            $table->string('COL20')->nullable();
            $table->string('COL21')->nullable();
            $table->string('COL22')->nullable();
            $table->string('COL23')->nullable();
            $table->string('COL24')->nullable();
            $table->string('COL25')->nullable();
            $table->string('COL26')->nullable();
            $table->string('COL27')->nullable();
            $table->string('COL28')->nullable();
            $table->string('COL29')->nullable();
            $table->string('COL30')->nullable();
            $table->string('COL31')->nullable();
        });
    }

    /**
     * Reverse migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('paasxl');
    }
};
