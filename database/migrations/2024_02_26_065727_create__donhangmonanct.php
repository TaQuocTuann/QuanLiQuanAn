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
        Schema::create('donhangmonanct', function (Blueprint $table) {
            $table->id();
         
            $table->string('tenkhachorder');
            $table->string('soban');
            $table->string('TenMon');
            $table->string('Ngay');
            $table->string('Soluongdonhang');
            $table->string('Tongthanhtoan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donhangmonanct');
    }
};
