<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageEvents extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->text('image');
            $table->text('subtitle');
            $table->string('favicon', 255);
            $table->string('logo', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_events');
    }
}