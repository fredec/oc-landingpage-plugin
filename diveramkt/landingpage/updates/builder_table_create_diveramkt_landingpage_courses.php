<?php namespace Diveramkt\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktLandingpageCourses extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_landingpage_courses', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('logo', 255)->nullable();
            $table->string('main_color', 10)->nullable();
            $table->string('second_color', 10)->nullable();
            $table->string('header_img', 255)->nullable();
            $table->string('header_title', 255);
            $table->text('header_description')->nullable();
            $table->string('header_btn_text', 100);
            $table->string('course_price1', 100);
            $table->string('course_price2', 100)->nullable();
            $table->string('course_payment_title', 255)->nullable();
            $table->text('course_payment_description')->nullable();
            $table->string('course_payment_img', 255)->nullable();
            $table->string('course_link', 255);
            $table->string('course_name', 255);
            $table->text('video')->nullable();
            $table->string('slug', 255);
            $table->text('blog_description');
            $table->string('blog_img', 255);
            $table->string('video_title', 255);
            $table->string('call_to_action_title', 255);
            $table->string('call_to_action_description', 255);
            $table->string('call_to_action_btn', 25);
            $table->string('testmonials_title', 255);
            $table->string('testmonials_style', 255);
            $table->string('testmonials_subtitle', 255);
            $table->text('course_description')->nullable();
            $table->boolean('course_opened')->nullable();
            $table->string('course_closed_message', 255)->nullable();
            $table->boolean('payment_enabled')->nullable();
            $table->boolean('testmonials_enabled')->nullable();
            $table->boolean('description_enabled')->nullable();
            $table->boolean('faq_enabled')->nullable();
            $table->text('faq_title')->nullable();
            $table->text('faq_subtitle')->nullable();
            $table->string('contact_phone', 255)->nullable();
            $table->string('contact_whatsapp', 255)->nullable();
            $table->string('contact_whatsapp_numbers', 255)->nullable();
            $table->boolean('contact_enabled')->nullable();
            $table->string('contact_email', 255)->nullable();
            $table->string('contact_title', 255)->nullable();
            $table->string('contact_subtitle', 255)->nullable();
            $table->string('news_title', 255)->nullable();
            $table->string('news_subtitle', 255)->nullable();
            $table->boolean('news_enabled')->nullable();
            $table->boolean('external_course')->nullable();
            $table->boolean('course_enabled')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_landingpage_courses');
    }
}