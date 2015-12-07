<?php 
class Cms5664f98d4af86_539794267Class extends \Cms\Classes\PageCode
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

    $this['item'] = \Fotius\Site\Models\Project::where('slug', $this->param('slug'))->first();
}
}
