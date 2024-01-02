<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Например, добавяне на нова колона
        Schema::table('teaterperformances', function (Blueprint $table) {
            $table->text('new_column');
        });

        // Други промени...
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Обратните промени
        Schema::table('teaterperformances', function (Blueprint $table) {
            $table->dropColumn('new_column');
        });

        // Други обратни промени...
    }
}

