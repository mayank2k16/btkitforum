<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('post_content');
            $table->string('post_pic');
            $table->integer('post_type');//0 for general,1 for cs,2 for mech,3 for civil,4 for chem,5 for ec,6 for electri,7 for bio-chem
            $table->boolean('status');
            $table->timestamps('created_at');
             
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
