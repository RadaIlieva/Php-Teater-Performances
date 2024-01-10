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
        Schema::table('teaterperformances', function (Blueprint $table) {
            $table->string('ticket')->nullable();
            $table->string('additional_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teaterperformances', function (Blueprint $table) {
            $table->dropColumn('ticket');
            $table->dropColumn('additional_info');
        });
    }
};