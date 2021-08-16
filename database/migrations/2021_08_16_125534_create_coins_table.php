<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('holders');
            $table->string('offical_site');
            $table->string('reddit');
            $table->string('github');
            $table->string('twitter');
            $table->string('telegram');
            $table->string('whitepaper');
            $table->string('description');
            $table->string('price');
            $table->string('marget_cap');
            $table->string('volume');
            $table->string('rank');
            $table->string('launch_date');
            $table->string('smart_chain');
            $table->string('coingecko');
            $table->string('seller');
            $table->string('paccake');
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
        Schema::dropIfExists('coins');
    }
}
