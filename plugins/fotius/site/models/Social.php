<?php namespace Fotius\Site\Models;

use Model;

/**
 * socials Model
 */
class Social extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    public $settingsCode = 'site_socials';

    public $settingsFields = 'fields.yaml';
}