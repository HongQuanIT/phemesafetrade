<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('fullname');
            $table->string('username');
            $table->string('sq')->nullable();
            $table->string('sa')->nullable();
            $table->string('email')->unique();
            $table->string('type')->default('user')->comment('admin|user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('btc_wallet')->nullable();
            $table->string('eth_wallet')->nullable();
            $table->string('sol_wallet')->nullable();
            $table->string('usdt_wallet')->nullable();
            $table->string('xrp_wallet')->nullable();
            $table->string('dot_wallet')->nullable();
            $table->rememberToken();
            
            $table->softDeletes();
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
