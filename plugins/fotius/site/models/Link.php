<?php namespace Fotius\Site\Models;

use Model;

/**
 * Link Model
 */
class Link extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fotius_site_links';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'title',
        'link',
        'description',
        'category',
        'active'
    ];

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