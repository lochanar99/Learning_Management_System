<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateELecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_lecs', function (Blueprint $table) {
            $table->bigIncrements('Eid');
            $table->string('stdId');
            $table->string('sName');
            $table->string('mId');
            $table->string('mName');
            $table->string('eDate');
            $table->string('sTel');
            $table->boolean('Approval')->default(0);
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
        Schema::dropIfExists('e_lecs');
    }
}
