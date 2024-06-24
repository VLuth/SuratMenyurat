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
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->format('d/m/Y');
            $table->string('nosurat')->nullable();
            $table->string('perihal')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('sifat')->nullable();
            $table->string('lampiran')->nullable();
            $table->string('kepada')->nullable();
            $table->string('isi')->nullable();
            $table->string('pengirim')->nullable();
            $table->string('status')->nullable();
            $table->date('verifikasi')->nullable();
            $table->date('tanggalverifikasi')->nullable();
            $table->date('accketua')->nullable();
            $table->string('tanggalacc')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('picverifikasi')->nullable();
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
