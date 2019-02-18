<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageCoursesTestmonials extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_courses_testmonials', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_courses_testmonials', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}