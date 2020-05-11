<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_news', function (Blueprint $table) {
            $table->bigIncrements('news_id');
            $table->string('title', 100);
            $table->string('intro');
            $table->integer('category_id');
            $table->integer('is_trash')->default(0);
            $table->integer('status')->default(0);
            $table->text('images');
            $table->text('content');
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('views')->default(0);
            $table->string('slug',255);
            $table->string('slug_search',255)->nullable();
            $table->integer('user_id');
            $table->string('signature',255)->nullable();
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
        Schema::dropIfExists('travel_news');
    }
}
