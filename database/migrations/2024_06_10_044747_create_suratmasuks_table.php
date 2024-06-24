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
            $table->date('tanggal')->format('d/m/Y')->nullable();
            $table->string('nosurat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('status')->default('Menunggu Verifikasi');
            $table->date('tanggalverifikasi')->nullable();
            $table->date('tanggaldisposisi')->nullable();
            $table->date('tanggaltindaklanjut')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('keterangandisposisi')->nullable();
            $table->string('kepada')->nullable();
            $table->string('petugas')->nullable();
            $table->string('hasiltindaklanjut')->nullable();
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
