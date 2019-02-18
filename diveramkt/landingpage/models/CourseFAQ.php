<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class CourseFAQ extends Model
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
        'question' => 'required',
        'answer' => 'required',
        'course_id' => 'required'
    ];

    public $belongsTo = [
        'course' => 'Diveramkt\LandingPage\Models\Course'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_courses_faq';
}
