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
            $table->unsignedBigInteger('unity_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->integer('level')->nullable();
            $table->char('mobile',10)->nullable()->unique();
            $table->boolean('isactivated')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreign('unity_id')->references('id')->on('unities')->cascadeOnDelete()->cascadeOnUpdate();
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
