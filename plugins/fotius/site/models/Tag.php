<?php namespace Fotius\Site\Models;

use Model;

/**
 * tags Model
 */
class Tag extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fotius_site_tags';

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
    public $belongsToMany = [
        'articles' => [
            'Fotius\Site\Models\Article',
            'table' => 'fotius_site_article_tag'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}