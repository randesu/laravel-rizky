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
        Schema::create('kamera', function (Blueprint $table) {
            $table->id();
            $table->string('kamera');
            $table->string('tipe_kamera');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga_jual', 10, 2);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
