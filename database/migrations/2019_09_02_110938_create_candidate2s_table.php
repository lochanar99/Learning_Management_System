<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidate2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate2s', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('First_Name');
            $table->String('Middle_Name');
            $table->String('Last_Name');
            $table->String('Date_Of_Birth');
            $table->String('Gender');
            $table->String('Address');
            $table->String('Branch');
            $table->String('Email');
            $table->integer('Mobile_Number');
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
        Schema::dropIfExists('candidate2s');
    }
}
