<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageEbooksItems extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_ebooks_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('ebook_id');
            $table->string('title', 255);
            $table->text('description');
            $table->string('icon', 255);
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_ebooks_items');
    }
}