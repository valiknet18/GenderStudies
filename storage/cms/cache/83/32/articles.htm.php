<?php 
class Cms5664ff0e92b0d_3337839308Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['articles'] = \Fotius\Site\Models\Article::orderBy('created_at', 'DESC')->paginate(10);
    $this['tags'] = \Fotius\Site\Models\Tag::orderBy('id', 'DESC')->get();
}
}
