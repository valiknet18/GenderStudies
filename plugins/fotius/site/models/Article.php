<?php namespace Fotius\Site\Models;

use Model;

/**
 * articles Model
 */
class Article extends Model
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
    public $table = 'fotius_site_articles';

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
        'tags' => [
            'Fotius\Site\Models\Tag',
            'table' => 'fotius_site_article_tag'
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'photo' => [
            'System\Models\File'
        ]
    ];
    public $attachMany = [];

    public function beforeCreate()
    {
        $link = '/news/' . $this->slug;

        if ($this->needKnow) {
            Link::create([
                'title' => $this->title,
                'description'   => $this->short_description,
                'link'  => '/news/' . $this->slug,
                'category'  => 'needKnow',
                'active'    => true,
            ]);
        } else {
            $links = Link::where('link', $link)->get();

            foreach ($links as $item) {
                $item->delete();
            }
        }

        if ($this->news) {
            Link::create([
                'title' => $this->title,
                'description'   => $this->short_description,
                'link'  => '/news/' . $this->slug,
                'category'  => 'news',
                'active'    => true,
            ]);
        } else {
            $links = Link::where('link', $link)->get();

            foreach ($links as $item) {
                $item->delete();
            }
        }
    }
}