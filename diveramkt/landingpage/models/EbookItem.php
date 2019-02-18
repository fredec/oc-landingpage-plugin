<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class EbookItem extends Model
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
    public $table = 'diveramkt_landingpage_ebooks_items';

    public $belongsTo = [
        'ebook' => 'Diveramkt\LandingPage\Models\Ebook'
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
