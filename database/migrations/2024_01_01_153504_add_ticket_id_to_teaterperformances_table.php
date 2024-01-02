<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTicketIdToTeaterperformancesTable extends Migration
{
    public function up()
    {
        Schema::table('teaterperformances', function (Blueprint $table) {
            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('teaterperformances', function (Blueprint $table) {
            $table->dropForeign(['ticket_id']);
            $table->dropColumn('ticket_id');
        });
    }
}
