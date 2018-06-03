<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStructureMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_member', function (Blueprint $table) {
            $table->unsignedInteger('structure_id')->index();
            $table->unsignedInteger('member_id')->index();
            $table->unsignedInteger('role_id')->index();
            $table->char('type_id', 1)->default('');
            $table->date('start_at')->nullable();
            $table->date('end_at')->nullable();
            $table->boolean('is_enabled');

            $table->primary(['structure_id', 'member_id', 'role_id']);
            $table->foreign('structure_id')->references('id')->on('associations');
            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('type_id')->references('id')->on('role_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structure_member');
    }
}
