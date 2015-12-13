<?php namespace Fotius\Site\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    public $implement = [
        'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $translatable = [
        'title',
        'short_description',
        'description'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fotius_site_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => [
            'System\Models\File'
        ]
    ];
    public $attachMany = [];

}