<?php namespace Fotius\Site\Models;

use Model;

/**
 * contacts Model
 */
class Contact extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    public $settingsCode = 'site_contacts';

    public $settingsFields = 'fields.yaml';

    public $attachOne = [
        'logo' => [
            'System\Models\File'
        ]
    ];

}