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
            $table->date('tanggalsurat')->format('d/m/Y')->nullable();
            $table->string('perihal')->nullable();
            $table->string('nosurat')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('file')->nullable();

            $table->date('tanggalverifikasi')->nullable();
            $table->string('verifikasi')->nullable();
            $table->string('keteranganverifikasi')->nullable();

            $table->date('tanggaldisposisi')->nullable();
            $table->string('aksi')->nullable();
            $table->string('keterangandisposisi')->nullable();
            $table->string('tujuandisposisi')->nullable();

            $table->date('tanggaltindaklanjut')->nullable();
            $table->string('petugas')->nullable();
            $table->string('hasiltindaklanjut')->nullable();
            $table->string('status')->default('Menunggu Verifikasi');

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
