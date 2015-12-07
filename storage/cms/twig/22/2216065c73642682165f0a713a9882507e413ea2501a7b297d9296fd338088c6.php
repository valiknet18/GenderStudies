<?php

/* /var/www/GenderStudies/themes/site/pages/museum.htm */
class __TwigTemplate_8339c4f11e51568bb5069774ed3f9156bbaad62431f4164771884b1b239e9f5b extends Twig_Template
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
        echo "<!--breadcrumbs start-->
<div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-4\">
                <h1>
                    Галерея
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Галерея
                        </a>
                    </li>
                    <li class=\"active\">
                        Віртуальний музей
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class=\"container\">
    <div class=\"row\">
        <ul class=\"thumbnails\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["museum"]) ? $context["museum"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 32
            echo "                <div class=\"col-md-4 wow bounceInUp\">
                    <div class=\"thumbnail shadow-conteiner\">
                        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["album"], "photos", array()), 0, array(), "array"), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "title", array()), "html", null, true);
            echo "\" class=\"img-responsive\" />
                        <div class=\"caption\">
                            <h3>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "title", array()), "html", null, true);
            echo "</h3>
                            <p>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "description", array()), "html", null, true);
            echo "</p>
                            <p align=\"center\"><a href=\"/museum/";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["album"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">Проглянути</a></p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>
    </div>
</div>


<div class=\"container col-md-12\">
    <div class=\"text-center\">
        ";
        // line 50
        echo (isset($context["museum"]) ? $context["museum"] : null);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/museum.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 50,  85 => 43,  74 => 38,  70 => 37,  66 => 36,  59 => 34,  55 => 32,  51 => 31,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Галерея*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Галерея*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         Віртуальний музей*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!--breadcrumbs end-->*/
/* */
/* <!--container start-->*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <ul class="thumbnails">*/
/*             {% for album in museum %}*/
/*                 <div class="col-md-4 wow bounceInUp">*/
/*                     <div class="thumbnail shadow-conteiner">*/
/*                         <img src="{{ album.photos[0].path }}" alt="{{ album.title }}" class="img-responsive" />*/
/*                         <div class="caption">*/
/*                             <h3>{{ album.title }}</h3>*/
/*                             <p>{{ album.description }}</p>*/
/*                             <p align="center"><a href="/museum/{{ album.id }}" class="btn btn-primary btn-block">Проглянути</a></p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="container col-md-12">*/
/*     <div class="text-center">*/
/*         {{ museum|raw }}*/
/*     </div>*/
/* </div>*/
