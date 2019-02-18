<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class CourseTestmonial extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'description' => 'required',
        'testmonial' => 'required',
        'image' => 'required',
    ];

    public $belongsTo = [
        'course' => 'Diveramkt\LandingPage\Models\Course'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_courses_testmonials';
}
