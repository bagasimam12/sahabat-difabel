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
        Schema::create('keperluan_disabilitas', function (Blueprint $table) {
            $table->uuid('keperluan_disabilitas_id')->primary();
            $table->integer('keperluan_layanan_id');
            $table->integer('disabilitas_id');
            $table->integer('status_diterima')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keperluan_disabilitas');
    }
};
