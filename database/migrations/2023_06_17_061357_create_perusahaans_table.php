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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->unsignedBigInteger('industri_id')->cascadeOnDelete();
            $table->string('nama_perusahaan');
            $table->text('alamat');
            $table->string('lokasi');
            $table->string('telpon');
            $table->string('url_website')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('agree_to_terms')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
