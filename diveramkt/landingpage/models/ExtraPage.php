<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class ExtraPage extends Model
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
    public $table = 'diveramkt_landingpage_extra_pages';

    public $hasMany = [
        'contents_backend' => ['Diveramkt\LandingPage\Models\ExtraPagesContent'],
        'contents' => ['Diveramkt\LandingPage\Models\ExtraPagesContent', 'scope' => 'enabled'],
        'contents_count' => ['Diveramkt\LandingPage\Models\ExtraPagesContent', 'count' => true]
    ];

    public function scopeEnabled($query) 
    {
        return $query->where('enabled', true);
    }

    public function scopeEnabledAndSidebar($query) 
    {
        return $query->where('enabled', true)->where('at_sidebar', true);
    }
}
