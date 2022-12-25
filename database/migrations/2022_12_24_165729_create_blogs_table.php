<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('main_image');
            $table->longText('title', 70);
            $table->longText('introduction', 300);
            $table->longText('description', 2000);
            $table->string('secondary_image')->nullable();
            $table->string('video_link')->nullable();
            $table->string('reading_time')->nullable();
            $table->timestamps();
            $table->foreign('owner')->references('username')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
