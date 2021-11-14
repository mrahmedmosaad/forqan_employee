<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamains', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('gender');
            $table->string('nationality');
            $table->string('type');
            $table->string('nationalid');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('stay_place');
            $table->string('address_current');
            $table->string('mobile1');
            $table->string('mobile2');
            $table->string('mobile_whats');
            $table->string('job_start_date');
            $table->string('address_home');
            $table->string('passport_number');
            $table->string('passport_name_arabic');
            $table->string('passport_name_english');
            $table->string('passport_job');
            $table->string('passport_address');
            $table->string('passport_start_date');
            $table->string('passport_end_date');
            $table->string('stay_number');
            $table->string('stay_job');
            $table->string('stay_job_owner');
            $table->string('stay_start_date');
            $table->string('stay_end_date');
            $table->string('relative_phone');
            $table->string('relative_mobile');
            $table->string('relative_type');
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
        Schema::dropIfExists('datamains');
    }
}
