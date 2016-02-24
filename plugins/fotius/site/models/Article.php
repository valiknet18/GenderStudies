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
        ],
        'document' => [
            'System\Models\File'
        ],
    ];
    public $attachMany = [
    ];

    public function beforeCreate()
    {
        $articleLink = '/articles/' . $this->slug;

        if ($this->needKnow) {
            $link = Link::create([
                'title' => $this->title,
                'description'   => $this->short_description,
                'link'  => $articleLink,
                'category'  => 'needKnow',
                'active'    => true,
            ]);

            $link->photo = $this->photo;
            $link->save();
        } else {
            $links = Link::where('link', $articleLink)->get();

            foreach ($links as $item) {
                $item->delete();
            }
        }

        if ($this->news) {
            $link = Link::create([
                'title' => $this->title,
                'description'   => $this->short_description,
                'link'  => $articleLink,
                'category'  => 'news',
                'active'    => true,
            ]);

            $link->photo = $this->photo;
            $link->save();
        } else {
            $links = Link::where('link', $articleLink)->get();

            foreach ($links as $item) {
                $item->delete();
            }
        }
    }

    public function afterCreate()
    {
        $articleLink = '/articles/' . $this->slug;
        $links = Link::where('link', $articleLink)->get();

        foreach ($links as $link) {
            $link->photo = $this->photo;
            $link->save();
        }
    }
}