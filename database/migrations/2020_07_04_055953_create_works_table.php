<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('main_photo')->nullable();
            $table->string('project_title')->nullable();
            $table->string('detail')->nullable();
            $table->string('photo_one')->nullable();
            $table->string('photo_two')->nullable();
            $table->string('photo_three')->nullable();
            $table->text('description')->nullable();
            $table->string('Language')->nullable();
            $table->string('website_link')->nullable();
            $table->string('github_link')->nullable();
            $table->integer('webdesign')->nullable();
            $table->integer('laravel')->nullable();
            $table->integer('php')->nullable();
            $table->integer('vuejs')->nullable();
            $table->integer('wordpress')->nullable();
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
        Schema::dropIfExists('works');
    }
}
