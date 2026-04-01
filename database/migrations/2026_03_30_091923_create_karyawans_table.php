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
       Schema::create('karyawans', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->string('email');
    $table->string('no_telp')->nullable();
    $table->text('alamat')->nullable();
    $table->string('jabatan');
    $table->integer('gaji')->nullable();
    $table->string('jenis_kelamin');
    $table->boolean('status')->default(true);
    
    $table->timestamps(); // ⬅️ WAJIB
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
