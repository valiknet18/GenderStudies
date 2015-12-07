<?php namespace Fotius\Site\Models;

use Model;

/**
 * bibliography Model
 */
class Bibliography extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fotius_site_bibliographies';

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