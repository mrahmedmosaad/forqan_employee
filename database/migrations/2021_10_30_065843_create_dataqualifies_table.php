<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataqualifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataqualifies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('qualification');
            $table->string('university');
            $table->string('college');
            $table->string('specialization');
            $table->string('percentage');
            $table->string('graduation_year');
            $table->string('rate');
            $table->string('notes')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dataqualifies');
    }
}
