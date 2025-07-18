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
        Schema::create('buisness_cycles', function (Blueprint $table) {
            $table->id();
            $table->string('kodeIndustri', 20);
            $table->foreign('kodeIndustri')->references('kodeIndustri')->on('tipe_industris');
            $table->string('kodeBisCyc', 20)->unique();
            $table->string('namaBisCyc', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buisness_cycles');
    }
};
