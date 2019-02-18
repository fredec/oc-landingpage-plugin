<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class ExtraPagesContent extends Model
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
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_extra_pages_contents';

    public $belongsTo = [
        'category' => 'Diveramkt\LandingPage\Models\ExtraPage'
    ];

    public function scopeEnabled($query) 
    {
        return $query->where('enabled', true);
    }
}
