<?php namespace Diveramkt\LandingPage\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class EbookItem extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage_ebooks_items' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Diveramkt.LandingPage', 'main-menu-landingpages', 'side-menu-ebooks-items');
    }
}
