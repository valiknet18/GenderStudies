<?php 
class Cms5665277a56b74_3827468188Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['books'] = \Fotius\Site\Models\Book::orderBy('created_at', 'DESC')->get();
}
}
