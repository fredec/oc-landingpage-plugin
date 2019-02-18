<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class EventLecture extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_events_lectures';

    public $belongsTo = [
        'event' => 'Diveramkt\LandingPage\Models\Event'
    ];
}
