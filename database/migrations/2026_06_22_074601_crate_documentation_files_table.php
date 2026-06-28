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
        // 1. Perbaikan: 'Schema' menggunakan huruf kapital di awal
        Schema::create('documentation_files', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // 2. Perbaikan: 'title' (disamakan dengan Controller agar tidak error)
            $table->string('file_path');
            $table->string('file_type');
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 4. Perbaikan: Menambahkan dropIfExists agar bisa di-rollback/fresh
        Schema::dropIfExists('documentation_files');
    }
};