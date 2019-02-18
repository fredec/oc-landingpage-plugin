<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEbooks extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_ebooks', function($table)
        {
            $table->string('sidebar_image', 255);
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_ebooks', function($table)
        {
            $table->dropColumn('sidebar_image');
        });
    }
}
