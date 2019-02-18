<?php namespace Diveramkt\LandingPage\Models;

use Model;

/**
 * Model
 */
class Ebook extends Model
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
        'file_to_download' => 'required',
        'file_image' => 'required',
        'title_thankspage' => 'required',
        'email_title' => 'required',
        'email_first_paragraph' => 'required',
        'email_link' => 'required',
    ];

    public function scopeEnabled($query)
    {
        return $query->where('ebook_enabled', true);
    }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'diveramkt_landingpage_ebooks';

    public $hasMany = [
        'items' => ['Diveramkt\LandingPage\Models\EbookItem', 'order' => 'order asc'],
    ];
}
