<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'course_name' => 'required',
        'slug' => 'required',
        'blog_img' => 'required',
        'course_link' => 'required',
    ];

    public function getUrl()
    {
        if (strpos($this->course_link, 'http') !== false)
            return $this->course_link;
        else
            return 'http://'.$this->course_link;
    }

    public function getVideo_Youtube()
    {
        if (strpos($this->video, 'watch') !== false) {
            $pieces = explode("v=", $this->video);
            return 'https://www.youtube.com/embed/'.$pieces[1].'?&amp;autoplay=1&amp;rel=0';
        }
    }

    public $hasMany = [
        'faqs' => 'Diveramkt\LandingPage\Models\CourseFAQ',
        'testmonials' => 'Diveramkt\LandingPage\Models\CourseTestmonial',
        'news' => 'Diveramkt\LandingPage\Models\CourseNaMidia'
    ];

    public function scopeEnabled($query)
    {
        return $query->where('course_enabled', true);
    }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_courses';
}
