<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageEventsLectures extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_events_lectures', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('description');
            $table->string('image', 255);
            $table->date('date');
            $table->dateTime('time');
            $table->string('youtube_link', 255)->nullable();
            $table->integer('event_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_events_lectures');
    }
}