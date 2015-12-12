<?php namespace Fotius\Site\Models;

use Model;

/**
 * Museum Model
 */
class Museum extends Model
{
    public $implement = [
        'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $translatable = [
        'title',
        'description'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fotius_site_museums';

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
    public $attachOne = [];
    public $attachMany = [
        'photos' => [
            'System\Models\File'
        ]
    ];

}