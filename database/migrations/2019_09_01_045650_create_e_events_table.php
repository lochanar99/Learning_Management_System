<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEEventsTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e_events', function (Blueprint $table) {
            $table->bigIncrements('Eid');
            $table->string('stdId');
            $table->string('sName');
            $table->string('eDate');
            $table->string('eVenue');
            $table->string('ePartici');
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
        Schema::dropIfExists('e_events');
    }
}
