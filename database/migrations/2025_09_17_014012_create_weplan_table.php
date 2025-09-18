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
        Schema::create('weplan', function (Blueprint $table) {

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
            $table->string('COL32')->nullable();
            $table->string('COL33')->nullable();
            $table->string('COL34')->nullable();
            $table->string('COL35')->nullable();
            $table->string('COL36')->nullable();
            $table->string('COL37')->nullable();
            $table->string('COL38')->nullable();
            $table->string('COL39')->nullable();
            $table->string('COL40')->nullable();
            $table->string('COL41')->nullable();
            $table->string('COL42')->nullable();
            $table->string('COL43')->nullable();
            $table->string('COL44')->nullable();
            $table->string('COL45')->nullable();
            $table->string('COL46')->nullable();
            $table->string('COL47')->nullable();
            $table->string('COL48')->nullable();
            $table->string('COL49')->nullable();
            $table->string('COL50')->nullable();
            $table->string('COL51')->nullable();
            $table->string('COL52')->nullable();
            $table->string('COL53')->nullable();
            $table->string('COL54')->nullable();
            $table->string('COL55')->nullable();
            $table->string('COL56')->nullable();
            $table->string('COL57')->nullable();
            $table->string('COL58')->nullable();
            $table->string('COL59')->nullable();
            $table->string('COL60')->nullable();
        });
    }

    /**
     * Reverse migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('weplan');
    }
};
