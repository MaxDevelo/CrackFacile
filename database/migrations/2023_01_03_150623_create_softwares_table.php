<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('information')->nullable();
            $table->string('title');
            $table->string('catch_phrase');
            $table->string('image_miniature');
            $table->string('imageone');
            $table->string('imagetwo');
            $table->string('url_download');
            $table->string('url_buy');
            $table->string('content_text');
            $table->integer('size_file');
            $table->date('published_at');
            $table->string('config_required');
            $table->string('url_video_trailer')->nullable();
            $table->boolean('istorrent');
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
        Schema::dropIfExists('softwares');
    }
}
