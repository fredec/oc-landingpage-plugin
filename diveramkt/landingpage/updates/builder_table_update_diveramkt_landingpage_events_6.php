<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEvents6 extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->string('field_comment', 255);
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->dropColumn('field_comment');
        });
    }
}
