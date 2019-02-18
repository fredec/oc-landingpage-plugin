<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEbooks2 extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_ebooks', function($table)
        {
            $table->string('aux_title', 255);
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_ebooks', function($table)
        {
            $table->dropColumn('aux_title');
        });
    }
}