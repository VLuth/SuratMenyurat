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
        Schema::create('suratmasuks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->format('d/m/Y');
            $table->string('nosurat');
            $table->string('perihal');
            $table->string('tujuan');
            $table->string('pengirim');
            $table->string('status')->default('Menunggu Verifikasi');
            $table->string('file')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuks');
    }
};
