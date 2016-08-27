<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('departments_teams', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('departments_id')->unsigned()->index();
            $table->foreign('departments_id')->references('id')->on('departments')->onDelete('cascade');

            $table->integer('teams_id')->unsigned()->index();
            $table->foreign('teams_id')->references('id')->on('teams')->onDelete('cascade');
        });

        Schema::create('teams_manager', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('teams_id')->unsigned()->index();
            $table->foreign('teams_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments_teams');
        Schema::dropIfExists('teams_manager');
        Schema::dropIfExists('teams');
    }
}
