<?php namespace Fotius\Site\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * News Back-end Controller
 */
class News extends Controller
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

        BackendMenu::setContext('Fotius.Site', 'site', 'news');
    }
}