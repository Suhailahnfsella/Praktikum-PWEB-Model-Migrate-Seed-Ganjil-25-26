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
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('matkul_id')->constrained()->onDelete('cascade');
            $table->integer('semester');
            $table->string('tahun_ajaran', 20);
            $table->enum('status', ['draft', 'submitted', 'approved', 'rejected'])->default('draft');
            $table->integer('total_sks')->default(0);

            $table->timestamps();
        });

         Schema::create('matkuls', function (Blueprint $table) {
            $table->id();
            $table->string('kode_matkul', 20);
            $table->string('nama_matkul', 100);
            $table->integer('sks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkuls');
        Schema::dropIfExists('krs');
    }
};
