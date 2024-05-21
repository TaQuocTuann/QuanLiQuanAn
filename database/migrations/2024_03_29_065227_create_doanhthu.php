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
        Schema::create('doanhthu', function (Blueprint $table) {
            $table->id();
            $table->string('Madoanhthu');
            $table->string('TenMon');
            $table->string('Ngay');
            $table->string('tonggiatien');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doanhthu');
    }
};
