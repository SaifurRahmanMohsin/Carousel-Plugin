<?php namespace Mohsin\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCarouselsTable extends Migration
{

    public function up()
    {
        Schema::create('mohsin_carousel_carousels', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mohsin_carousel_carousels');
    }

}
