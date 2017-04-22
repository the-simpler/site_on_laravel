<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateSubscriptionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('subscriptions',function(Blueprint $table){
            $table->increments("id");
            $table->string("user_id")->nullable();
            $table->string("email");
            $table->string("body");
            $table->string("url")->nullable();
            $table->string("url_unsub")->nullable();
            $table->string("type")->nullable();
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
        Schema::drop('subscriptions');
    }

}