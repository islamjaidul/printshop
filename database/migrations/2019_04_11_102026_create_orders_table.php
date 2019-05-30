<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameame',30);
            $table->unsignedInteger('user_id')->index();
            $table->integer('quantity')->nullable();
            $table->date('deliveryDate')->nullable();
            $table->string('orderNo',20)->index()->nullable();
            $table->enum('status',['0','1','2','3','4','5','6','7','8'])
            ->default('0')
            ->index()
            ->comment('1-requested,2-approved,3-in-printshop,4-waiting for dispatch,5-dispatched,6-delivered,7-payment in pending,8-paid');

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
        Schema::dropIfExists('orders');
    }
}
