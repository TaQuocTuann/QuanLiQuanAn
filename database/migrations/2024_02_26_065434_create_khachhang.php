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
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id();
            $table->string('Makhachhang');
            $table->string('Tenkhachhang');
            $table->string('SDT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khachhang');
    }
};
