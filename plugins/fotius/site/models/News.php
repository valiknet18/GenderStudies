<?php namespace Fotius\Site\Models;

use Backend\Facades\Backend;
use Model;

/**
 * News Model
 */
class News extends Model
{
    public $implement = [
        'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    public $translatable = [
        'header',
        'title',
        'short_description',
        'description'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fotius_site_news';

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

    public function beforeCreate()
    {
        $newsLink = '/news/' . $this->category . '/item/' . $this->slug;

        if ($this->needKnow) {
            $link = Link::create([
                'title' => $this->title,
                'description'   => $this->short_description,
                'link'  => $newsLink,
                'category'  => 'needKnow',
                'active'    => true,
            ]);

            $link->photo = $this->photo;
            $link->save();
        } else {
            $links = Link::where('link', $newsLink)->get();

            foreach ($links as $item) {
                $item->delete();
            }
        }

        if ($this->news) {
            $link = Link::create([
                'title' => $this->title,
                'description'   => $this->short_description,
                'link'  => $newsLink,
                'category'  => 'news',
                'active'    => true,
            ]);

            $link->photo = $this->photo;
            $link->save();
        } else {
            $links = Link::where('link', $newsLink)->get();

            foreach ($links as $item) {
                $item->delete();
            }
        }
    }

    public function afterCreate()
    {
        $newsLink = '/news/' . $this->category . '/item/' . $this->slug;
        $links = Link::where('link', $newsLink)->get();

        foreach ($links as $link) {
            $link->photo = $this->photo;
            $link->save();
        }
    }
}