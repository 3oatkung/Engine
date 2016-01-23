<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->string('videoUrl');
            $table->integer('order');
            $table->string('topicSummary1');
            $table->string('descSummary1');
            $table->string('iconSummary1');
            $table->string('topicSummary2');
            $table->string('descSummary2');
            $table->string('iconSummary2');
            $table->string('topicSummary3');
            $table->string('descSummary3');
            $table->string('iconSummary3');
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
        Schema::drop('lessons');
    }
}
