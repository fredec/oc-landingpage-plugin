<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class CourseNaMidia extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'course_id' => 'required',
        'logo_img' => 'required',
        'link' => 'required'
    ];

    public $belongsTo = [
        'course' => 'DiveraMkt\LandingPage\Models\Course'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_courses_namidia';
}
