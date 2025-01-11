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
        Schema::create('orang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grandparent_id')->constrained('grandparents')->onDelete('cascade');
            $table->string('nama');
            $table->string('status')->nullable();
            $table->date('tanggal_lahir');
            $table->string('keterangan')->nullable();
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orang');
    }
};
