<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageExtraPages extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_extra_pages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category', 255);
            $table->string('slug', 255);
            $table->boolean('enabled');
            $table->boolean('at_sidebar');
            $table->string('icon', 20);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_extra_pages');
    }
}