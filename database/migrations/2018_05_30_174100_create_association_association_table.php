<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationAssociationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association_association', function (Blueprint $table) {
            $table->unsignedInteger('parent_id');
            $table->unsignedInteger('association_id');
            $table->date('create_at')->nullable()->default(null);
            $table->date('end_at')->nullable()->default(null);

            $table->primary(['parent_id', 'association_id']);
            $table->foreign('parent_id')->references('id')->on('associations');
            $table->foreign('association_id')->references('id')->on('associations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association_association');
    }
}
