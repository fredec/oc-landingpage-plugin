<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageCoursesFaq extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_courses_faq', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('question');
            $table->text('answer');
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_courses_faq');
    }
}
