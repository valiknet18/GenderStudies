<?php 
class Cms566a725fba422_305574946Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['slider'] = \System\Models\File::where('attachment_type', 'Fotius\Site\Models\Slider')->limit(8)->get();
    $this['main'] = \Fotius\Site\Models\Link::where('category', 'main')->get();
    $this['news'] = \Fotius\Site\Models\Link::where('category', 'news')->get();
    $this['needKnow'] = \Fotius\Site\Models\Link::where('category', 'needKnow')->get();
    $this['partners'] = \Fotius\Site\Models\Partner::limit(15)->get();
}
}
