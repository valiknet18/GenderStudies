<?php namespace Fotius\Site\Models;

use Model;

/**
 * History Model
 */
class History extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel',
        'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $translatable = [
        'description'
    ];

    public $settingsCode = 'site_history';

    public $settingsFields = 'fields.yaml';

    public $attachMany = [
        'photos' => [
            'System\Models\File'
        ]
    ];
}