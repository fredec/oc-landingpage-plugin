<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEvents3 extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->string('email_title', 50);
            $table->text('email_first_paragraph');
            $table->string('email_link', 255);
            $table->text('email_content');
            $table->string('email_btn', 50);
            $table->string('email_footer', 255);
            $table->string('email_title_closed', 50);
            $table->text('email_first_paragraph_closed');
            $table->string('email_link_closed', 255);
            $table->text('email_content_closed');
            $table->string('email_btn_closed', 50);
            $table->string('email_footer_closed', 255);
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->dropColumn('email_title');
            $table->dropColumn('email_first_paragraph');
            $table->dropColumn('email_link');
            $table->dropColumn('email_content');
            $table->dropColumn('email_btn');
            $table->dropColumn('email_footer');
            $table->dropColumn('email_title_closed');
            $table->dropColumn('email_first_paragraph_closed');
            $table->dropColumn('email_link_closed');
            $table->dropColumn('email_content_closed');
            $table->dropColumn('email_btn_closed');
            $table->dropColumn('email_footer_closed');
        });
    }
}
