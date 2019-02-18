<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageExtraPagesContents extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_extra_pages_contents', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('extra_page_id');
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->text('description');
            $table->string('main_image', 255);
            $table->string('external_link', 255);
            $table->text('content');
            $table->boolean('enabled');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_extra_pages_contents');
    }
}