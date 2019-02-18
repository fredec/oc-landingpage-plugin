<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'slug' => 'required',
    ];

    public function getBySlug($slug)
    {   
        return Event::where('slug', $slug)->get();
    }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_events';

    public $hasMany = [
        'lectures' => 'Diveramkt\LandingPage\Models\EventLecture',
        'lectures_count' => ['Diveramkt\LandingPage\Models\EventLecture', 'count' => true]
    ];
}
