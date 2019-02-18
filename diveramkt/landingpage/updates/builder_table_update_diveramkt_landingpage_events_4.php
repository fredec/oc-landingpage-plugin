<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktLandingpageEvents4 extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->string('email_link_text', 255)->nullable();
            $table->string('email_link_text_closed', 255)->nullable();
            $table->string('email_btn_link', 255)->nullable();
            $table->string('email_btn_link_closed', 255)->nullable();
            $table->string('email_link', 255)->nullable()->change();
            $table->text('email_content')->nullable()->change();
            $table->string('email_btn', 50)->nullable()->change();
            $table->string('email_footer', 255)->nullable()->change();
            $table->string('email_link_closed', 255)->nullable()->change();
            $table->text('email_content_closed')->nullable()->change();
            $table->string('email_btn_closed', 50)->nullable()->change();
            $table->string('email_footer_closed', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_landingpage_events', function($table)
        {
            $table->dropColumn('email_link_text');
            $table->dropColumn('email_link_text_closed');
            $table->dropColumn('email_btn_link');
            $table->dropColumn('email_btn_link_closed');
            $table->string('email_link', 255)->nullable(false)->change();
            $table->text('email_content')->nullable(false)->change();
            $table->string('email_btn', 50)->nullable(false)->change();
            $table->string('email_footer', 255)->nullable(false)->change();
            $table->string('email_link_closed', 255)->nullable(false)->change();
            $table->text('email_content_closed')->nullable(false)->change();
            $table->string('email_btn_closed', 50)->nullable(false)->change();
            $table->string('email_footer_closed', 255)->nullable(false)->change();
        });
    }
}
