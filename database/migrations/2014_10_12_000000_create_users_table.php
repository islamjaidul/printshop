<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable();
            $table->string('email',40)->unique();
            $table->string('password');
            $table->string('name',30)->nullable();
            $table->string('department',20)->nullable();
            $table->string('designation',20)->nullable();
            $table->string('profileImageUrl')->nullable();
            $table->string('phone',16)->nullable();
            $table->string('address')->nullable();
            $table->enum('isActive',['0','1'])->default('0');
            $table->enum('role',['0','1','2','3','4'])->default('0')->comment('0-owner','1-corp-user','2-cop-admin','3-pri-admin','3-pri-user');
            $table->integer('billAmount')->nullable();
            $table->string('openReqest',10)->nullable();

            
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
