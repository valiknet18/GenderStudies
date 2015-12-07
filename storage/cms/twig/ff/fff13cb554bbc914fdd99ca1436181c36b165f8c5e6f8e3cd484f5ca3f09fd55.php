<?php

/* /var/www/GenderStudies/themes/site/pages/bibliography.htm */
class __TwigTemplate_e886786151071a35373415e460ee18e44ca2e44530680cb29f64152724e2ef42 extends Twig_Template
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
                    Публікації
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Публікації
                        </a>
                    </li>
                    <li class=\"active\">
                        Бібліографія
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
        <div class=\"panel-group\" id=\"accordion\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bibliographies"]) ? $context["bibliographies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["bibliography"]) {
            // line 32
            echo "                <div class=\"panel panel-default wow bounceInUp animated\">
                    <div class=\"panel-heading cursor\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#1-1\">
                        <h4 class=\"panel-title\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["bibliography"], "author", array()), "html", null, true);
            echo "
                            <span class=\"glyphicon glyphicon-chevron-down pull-right\"></span>
                        </h4>
                    </div>
                    <div id=\"1-1\" class=\"panel-collapse collapse in\">
                        <div class=\"panel-body col-xs-12 col-sm-3 .col-md-2 col-lg-2 bibliography-img\">
                            <img class=\"img-responsive\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bibliography"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"panel-body col-xs-12 col-sm-9 .col-md-10 col-lg-10\">
                            ";
            // line 44
            echo $this->getAttribute($context["bibliography"], "description", array());
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bibliography'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/bibliography.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 49,  75 => 44,  69 => 41,  60 => 35,  55 => 32,  51 => 31,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Публікації*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Публікації*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         Бібліографія*/
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
/*         <div class="panel-group" id="accordion">*/
/*             {% for bibliography in bibliographies %}*/
/*                 <div class="panel panel-default wow bounceInUp animated">*/
/*                     <div class="panel-heading cursor" data-toggle="collapse" data-parent="#accordion" href="#1-1">*/
/*                         <h4 class="panel-title">*/
/*                             {{ bibliography.author }}*/
/*                             <span class="glyphicon glyphicon-chevron-down pull-right"></span>*/
/*                         </h4>*/
/*                     </div>*/
/*                     <div id="1-1" class="panel-collapse collapse in">*/
/*                         <div class="panel-body col-xs-12 col-sm-3 .col-md-2 col-lg-2 bibliography-img">*/
/*                             <img class="img-responsive" src="{{ bibliography.photo.path }}" alt="">*/
/*                         </div>*/
/*                         <div class="panel-body col-xs-12 col-sm-9 .col-md-10 col-lg-10">*/
/*                             {{ bibliography.description|raw }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
