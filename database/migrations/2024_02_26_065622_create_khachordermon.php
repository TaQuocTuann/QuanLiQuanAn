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
        Schema::create('khachordermon', function (Blueprint $table) {
            $table->id();
            $table->string('Tenmon');
            $table->string('Soluong');
            $table->string('Ghichu');
            $table->string('Giamon');
            $table->string('tonggiatien');
            $table->string('tenkhachorder');
            $table->string('soban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khachordermon');
    }
};
