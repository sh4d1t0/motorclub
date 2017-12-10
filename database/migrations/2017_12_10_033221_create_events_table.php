<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_event')->unsigned()->required();
            $table->timestamp('start_date')->required();
            $table->timestamp('end_date')->required();
            $table->string('title')->required();
            $table->string('purpose')->required();
            $table->text('description')->required();
            $table->string('venue')->required();
            $table->string('kilometers')->required();
            $table->string('weather')->nullable();
            $table->string('ground')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('type_event')->references('id')->on('events_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
