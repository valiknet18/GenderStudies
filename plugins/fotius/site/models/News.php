<?php namespace Fotius\Site\Models;

use Backend\Facades\Backend;
use Model;

/**
 * News Model
 */
class News extends Model
{

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
        $link = '/news/' . $this->slug;

        if ($this->needToKnow) {
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
        }
    }
}