<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_items', function (Blueprint $table) {
            $table->increments('id');
            $table->String('ItemCode');
            $table->String('ItemName');
            $table->String('CurrentItem');
            $table->String('RequiredItem');
            $table->String('Quantity');
            $table->String('Status');
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
        Schema::dropIfExists('lab_items');
    }
}
