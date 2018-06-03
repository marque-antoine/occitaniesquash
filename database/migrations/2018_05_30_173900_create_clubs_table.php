<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('league_id')->fillable();
            $table->unsignedInteger('department_id')->fillable();
            $table->string('nickname');
            $table->string('legal_form');
            $table->string('trade_name');
            $table->integer('court');

            $table->primary('id');
            $table->foreign('id')->references('id')->on('structures')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
}
