<?php

/* /var/www/GenderStudies/themes/site/partials/header.htm */
class __TwigTemplate_8b8efcc5cb91d89cef0a9495164b585b4c66509a5f229393897a45c6e604deca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"language\">
    <a href=\"#\" title=\"UA\" class=\"language-flag\"><img  src=\"";
        // line 2
        echo $this->env->getExtension('CMS')->themeFilter("assets/image/ua.png");
        echo "\" alt=\"\" width=\"18\" height=\"12\"></a>
    <a href=\"#\" title=\"RU\" class=\"language-flag\"><img  src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/image/ru.png");
        echo "\" alt=\"\" width=\"18\" height=\"12\"></a>
    <span class=\"language-text\">Язык</span>
</div>

<header class=\"head-section\">
    <div class=\"navbar navbar-default navbar-static-top container\">
        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">L<span>ogo</span></a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li>
                    <a href=\"/\">Главная</a>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                            \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Про центр <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/history\">История</a>
                        </li>
                        <li>
                            <a href=\"/structure\">Структура</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                            \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Новости <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/news\">Тренинг</a>
                        </li>
                        <li>
                            <a href=\"/news\">Обявления</a>
                        </li>
                        <li>
                            <a href=\"/news\">Благотворительность</a>
                        </li>
                        <li>
                            <a href=\"/archive\">Архив</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                            \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Проекты <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/projects\">Конференции</a>
                        </li>
                        <li>
                            <a href=\"/projects\">Иследования</a>
                        </li>
                        <li>
                            <a href=\"/projects\">Стажировка</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                            \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Публикации <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/articles\">Статьи</a>
                        </li>
                        <li>
                            <a href=\"/books\">Книги</a>
                        </li>
                        <li>
                            <a href=\"#\">Библиография</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                            \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Галерея <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/announcement\">Анонсы</a>
                        </li>
                        <li>
                            <a href=\"/albums\">Фотографии</a>
                        </li>
                        <li>
                            <a href=\"/museum\">Виртуальный музей</a>
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-close-others=\"false\" data-delay=\"0\" data-hover=
                            \"dropdown\" data-toggle=\"dropdown\" href=\"#\">Ссылки <i class=\"fa fa-angle-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <a href=\"/partners\">Партнеры</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=\"/contacts\">Контакты</a>
                </li>
                <li>
                    <input class=\"form-control search\" placeholder=\" Search\" type=\"text\">
                </li>
            </ul>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="language">*/
/*     <a href="#" title="UA" class="language-flag"><img  src="{{ 'assets/image/ua.png'|theme }}" alt="" width="18" height="12"></a>*/
/*     <a href="#" title="RU" class="language-flag"><img  src="{{ 'assets/image/ru.png'|theme }}" alt="" width="18" height="12"></a>*/
/*     <span class="language-text">Язык</span>*/
/* </div>*/
/* */
/* <header class="head-section">*/
/*     <div class="navbar navbar-default navbar-static-top container">*/
/*         <div class="navbar-header">*/
/*             <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">L<span>ogo</span></a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li>*/
/*                     <a href="/">Главная</a>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                             "dropdown" data-toggle="dropdown" href="#">Про центр <i class="fa fa-angle-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/history">История</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/structure">Структура</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                             "dropdown" data-toggle="dropdown" href="#">Новости <i class="fa fa-angle-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/news">Тренинг</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/news">Обявления</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/news">Благотворительность</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/archive">Архив</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                             "dropdown" data-toggle="dropdown" href="#">Проекты <i class="fa fa-angle-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/projects">Конференции</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/projects">Иследования</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/projects">Стажировка</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                             "dropdown" data-toggle="dropdown" href="#">Публикации <i class="fa fa-angle-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/articles">Статьи</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/books">Книги</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Библиография</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                             "dropdown" data-toggle="dropdown" href="#">Галерея <i class="fa fa-angle-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/announcement">Анонсы</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/albums">Фотографии</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="/museum">Виртуальный музей</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="dropdown">*/
/*                     <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=*/
/*                             "dropdown" data-toggle="dropdown" href="#">Ссылки <i class="fa fa-angle-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li>*/
/*                             <a href="/partners">Партнеры</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="/contacts">Контакты</a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <input class="form-control search" placeholder=" Search" type="text">*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
