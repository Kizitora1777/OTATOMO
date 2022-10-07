<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('item_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('state');
            $table->boolean('is_matching');
            $table->timestamps();

            
            // 外部キー制約
            // user_idはUserテーブルのidを参照するよう設定する
            $table->foreign('user_id')->references('id')->on('users');
            
            // item_idはItemテーブルのidを参照するよう設定する
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
