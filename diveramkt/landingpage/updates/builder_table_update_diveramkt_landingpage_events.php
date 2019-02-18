<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEvents extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->string('bgcolor1', 255)->nullable();
            $table->text('video_embed')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->boolean('enabled')->nullable();
            $table->text('slug');
            $table->string('subheader_image1', 255)->nullable();
            $table->string('subheader_image1_title', 255)->nullable();
            $table->string('subheader_image1_link', 255)->nullable();
            $table->string('subheader_image2', 255)->nullable();
            $table->string('subheader_image2_title', 255)->nullable();
            $table->string('subheader_image2_link', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->dropColumn('bgcolor1');
            $table->dropColumn('video_embed');
            $table->dropColumn('date');
            $table->dropColumn('time');
             $table->dropColumn('enabled');
            $table->dropColumn('slug');
            $table->dropColumn('subheader_image1');
            $table->dropColumn('subheader_image1_title');
            $table->dropColumn('subheader_image1_link');
            $table->dropColumn('subheader_image2');
            $table->dropColumn('subheader_image2_title');
            $table->dropColumn('subheader_image2_link');
        });
    }
}