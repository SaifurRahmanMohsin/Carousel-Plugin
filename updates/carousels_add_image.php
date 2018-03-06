<?php namespace Mohsin\Carousel\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CarouselsAddImage extends Migration
{
    public function up()
    {
        Schema::table('mohsin_carousel_carousels', function($table)
        {
            $table->string('image');
        });
    }
    public function down()
    {
        Schema::table('mohsin_carousel_carousels', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
