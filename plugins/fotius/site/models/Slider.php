<?php namespace Fotius\Site\Models;

use Model;

/**
 * slider Model
 */
class Slider extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    public $settingsCode = 'site_slider';

    public $settingsFields = 'fields.yaml';

    public $attachMany = [
        'photos' => [
            'System\Models\File'
        ]
    ];

}