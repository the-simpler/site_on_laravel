<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('products',function(Blueprint $table){
            $table->increments("id");
            $table->string("name")->nullable();
            $table->string("body")->nullable();
            $table->string("picture")->nullable();
            $table->enum("showhide", ["show", "hide", ])->nullable();
            $table->integer("user_id")->references("id")->on("user")->nullable();
            $table->integer("categories_id")->references("id")->on("categories")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }

}