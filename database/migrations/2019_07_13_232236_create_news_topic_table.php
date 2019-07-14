<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_topic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('news_id')->unsigned();;
            $table->foreign('news_id')->references('id')->on('news')->onDelete('restrict');
            $table->bigInteger('topic_id')->unsigned();;
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('restrict');
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
        Schema::dropIfExists('news_topic');
    }
}
