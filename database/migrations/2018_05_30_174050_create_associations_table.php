<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('type_id')->index();
            $table->unsignedInteger('club_id')->default(0)->index();
            $table->string('nickname');

            $table->primary('id');
            $table->foreign('id')->references('id')->on('structures')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('association_types');
            $table->foreign('club_id')->references('id')->on('clubs');

        });
        Schema::table('clubs', function (Blueprint $table) {
            $table->foreign('league_id')->references('id')->on('associations');
            $table->foreign('department_id')->references('id')->on('associations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associations');
    }
}
