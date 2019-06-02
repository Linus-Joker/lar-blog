<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogclientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogclient', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->srting('name', 100);
            $table->srting('password', 255);
            $table->integer('phone', 21);
            $table->srting('mail', 255);
            $table->srting('gender', 30);
            $table->datetime('created_at')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogclient');
    }
}
