<?php namespace Mohsin\Carousel\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Backend\Models\BrandSetting;
use System\Classes\SettingsManager;

/**
 * Carousels Back-end Controller
 */
class Carousels extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BrandSetting::instance()->get('show_carousels_in_nav') ? BackendMenu::setContext('Mohsin.Carousel', 'carousels') : BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('Mohsin.Carousel', 'carousels');
    }
}
