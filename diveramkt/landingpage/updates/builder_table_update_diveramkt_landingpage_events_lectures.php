<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEventsLectures extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_events_lectures', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->time('time')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_events_lectures', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->dateTime('time')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}