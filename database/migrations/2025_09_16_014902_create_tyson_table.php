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
        Schema::create('tyson', function (Blueprint $table) {
            $table->string('COL1');
            $table->string('COL2');
            $table->string('COL3');
            $table->string('COL4');
            $table->string('COL5');
            $table->string('COL6');
            $table->string('COL7');
            $table->string('COL8');
            $table->string('COL9');
            $table->string('COL10');
            $table->string('COL11');
            $table->string('COL12');
            $table->string('COL13');
            $table->string('COL14');
            $table->string('COL15');
            $table->string('COL16');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tyson');
    }
};
