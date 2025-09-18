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
        Schema::create('smartlock', function (Blueprint $table) {
            $table->string('COL1');
            $table->string('COL2');
            $table->string('COL3');
            $table->string('COL4');
            $table->string('COL5');
            $table->string('COL6');
            $table->string('COL7');
            $table->string('COL8');
            $table->string('COL9');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smartlock');
    }
};
