<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->id();
            $table->integer('num')->nullable()->unique();
            $table->string('address')->nullable();

            $table->unsignedBigInteger('localtype_id');
            $table->boolean('etat')->nullable();
            $table->decimal('local_value',15,2)->nullable();
    $table->foreign('localtype_id')->references('id')->on('localtypes')->cascadeOnUpdate()
->cascadeOnDelete();
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
        Schema::dropIfExists('locals');
    }
}
