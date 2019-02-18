<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageCoursesTestmonials extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_courses_testmonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('description', 255);
            $table->text('testmonial');
            $table->string('image', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('course_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_courses_testmonials');
    }
}