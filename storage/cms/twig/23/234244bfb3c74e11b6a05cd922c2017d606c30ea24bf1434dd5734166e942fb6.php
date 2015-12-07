<?php

/* /var/www/GenderStudies/themes/site/pages/partners.htm */
class __TwigTemplate_75132e4a3251a1d593c958cb120ecc688b3b17e6c59e5ded0c2c0b3768a8b9f1 extends Twig_Template
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
                    Посилання
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Посилання
                        </a>
                    </li>
                    <li class=\"active\">
                        Партнери
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->
<div class=\"container\">
    <div class=\"row destacados\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partners"]) ? $context["partners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
            // line 31
            echo "            <div class=\"col-md-4 wow bounceIn\">
                <div>
                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partner"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Texto Alternativo\" class=\"img-circle img-thumbnail\">
                    <h2>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "title", array()), "html", null, true);
            echo "</h2>
                    <p>
                        <i class=\"glyphicon glyphicon-globe\"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "site", array()), "html", null, true);
            echo " <br/>
                        <i class=\"glyphicon glyphicon-envelope\"></i> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "email", array()), "html", null, true);
            echo " <br/>
                        <i class=\"glyphicon glyphicon-info-sign\"></i> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "description", array()), "html", null, true);
            echo "
                    </p>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "site", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\" title=\"Enlace\" target=\"_blank\">Перейти »</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>
</div>
<!--container end-->";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/partners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  80 => 40,  75 => 38,  71 => 37,  67 => 36,  62 => 34,  58 => 33,  54 => 31,  50 => 30,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Посилання*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Посилання*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         Партнери*/
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
/*     <div class="row destacados">*/
/*         {% for partner in partners %}*/
/*             <div class="col-md-4 wow bounceIn">*/
/*                 <div>*/
/*                     <img src="{{ partner.photo.path }}" alt="Texto Alternativo" class="img-circle img-thumbnail">*/
/*                     <h2>{{ partner.title }}</h2>*/
/*                     <p>*/
/*                         <i class="glyphicon glyphicon-globe"></i> {{ partner.site }} <br/>*/
/*                         <i class="glyphicon glyphicon-envelope"></i> {{ partner.email }} <br/>*/
/*                         <i class="glyphicon glyphicon-info-sign"></i> {{ partner.description }}*/
/*                     </p>*/
/*                     <a href="{{ partner.site }}" class="btn btn-primary" title="Enlace" target="_blank">Перейти »</a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* <!--container end-->*/
