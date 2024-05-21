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
        Schema::create('datbanan', function (Blueprint $table) {
            $table->id();
            $table->string('Madatban');
            $table->string('Tenkhach');
            $table->string('Soluongban');
            $table->date('Ngaydatban');
            $table->time('Giodatban');
            $table->string('Sodienthoai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datbanan');
    }
};
