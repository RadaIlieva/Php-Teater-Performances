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
        Schema::table('biletis', function (Blueprint $table) {
            $table->unsignedBigInteger('teaterperformance_id');
            $table->foreign('teaterperformance_id')->references('id')->on('teaterperformances');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biletis', function (Blueprint $table) {
            $table->dropForeign(['teaterperformance_id']);
            $table->dropColumn('teaterperformance_id');
        });
    }
};
