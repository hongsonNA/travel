<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_category', function (Blueprint $table) {
            $table->bigIncrements('category_id');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->integer('parent_id')->nullable();
            $table->integer('is_trash')->default(0);
            $table->integer('order_show')->nullable();
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
        Schema::dropIfExists('travel_category');
    }
}
