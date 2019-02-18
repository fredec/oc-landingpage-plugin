<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEvents2 extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->string('title_closed', 255);
            $table->string('subtitle_closed', 255);
            $table->text('description_closed');
            $table->string('observation_closed', 50);
            $table->string('footer_title', 50);
            $table->string('footer_description', 255);
            $table->string('footer_title_closed', 50);
            $table->string('footer_description_closed', 255);
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->dropColumn('title_closed');
            $table->dropColumn('subtitle_closed');
            $table->dropColumn('description_closed');
            $table->dropColumn('observation_closed');
            $table->dropColumn('footer_title');
            $table->dropColumn('footer_description');
            $table->dropColumn('footer_title_closed');
            $table->dropColumn('footer_description_closed');
        });
    }
}
