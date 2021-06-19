<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('height');
            $table->text('mass');
            $table->text('hair_color');
            $table->text('skin_color');
            $table->text('eye_color');
            $table->text('birth_year');
            $table->text('gender');
            $table->text('homeworld');
            $table->text('films');
            $table->text('species');
            $table->text('vehicles');
            $table->text('starships');
            $table->text('created');
            $table->text('edited');
            $table->text('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
