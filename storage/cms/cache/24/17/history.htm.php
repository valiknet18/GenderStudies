<?php 
class Cms566a72624fa7d_2114124900Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['slider'] = \System\Models\File::where('attachment_type', 'Fotius\Site\Models\History')->get();
    $this['history'] = \Fotius\Site\Models\History::get('description');
}
}
