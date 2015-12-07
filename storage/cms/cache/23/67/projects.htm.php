<?php 
class Cms5664f7e3372be_2025178588Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    switch ($this->param("category")) {
        case "conferentions": {
            $this['category'] = "Конференції";
        }
            break;

        case "exploration": {
            $this['category'] = "Дослідження";
        }
            break;

        case "internships": {
            $this['category'] = "Стажування";
        }
            break;

        default: {
            throw new Exception("Сторінка не знайдена");
        }
    }

    $this['projects'] = \Fotius\Site\Models\Project::where('category', $this->param('category'))->paginate(9);
}
}
