<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageCoursesNamidia extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_courses_namidia', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('logo_img', 255);
            $table->string('description', 255)->nullable();
            $table->string('link', 255);
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_courses_namidia');
    }
}
