<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageEbooks extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_ebooks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->text('main_image')->nullable();
            $table->text('main_content')->nullable();
            $table->text('aux_image')->nullable();
            $table->text('aux_content')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->text('file_to_download')->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('file_image', 255)->nullable();
            $table->text('subtitle');
            $table->string('main_title', 255)->nullable();
            $table->string('slug', 255);
            $table->string('title_thankspage', 255);
            $table->text('description_thankspage');
            $table->string('email_title', 255);
            $table->text('email_first_paragraph');
            $table->text('email_content')->nullable();
            $table->text('email_link');
            $table->text('email_btn')->nullable();
            $table->text('email_footer')->nullable();
            $table->boolean('ebook_enabled')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_ebooks');
    }
}