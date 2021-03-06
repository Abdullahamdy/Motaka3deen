<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('inesta');
            $table->string('githup');
            $table->string('phone');
            $table->string('another_phone');
            $table->string('whats_num');
            $table->string('linked_in');
            $table->string('gmail');
            $table->string('twitter');



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
        Schema::dropIfExists('social_media');
    }
}
