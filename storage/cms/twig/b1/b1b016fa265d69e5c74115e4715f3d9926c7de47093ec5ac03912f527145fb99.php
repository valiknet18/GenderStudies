<?php

/* /var/www/GenderStudies/themes/site/pages/project.htm */
class __TwigTemplate_1d08d1c12e02656536f2a0073839b73ce4f08203a5fd92f0316891378e5d1542 extends Twig_Template
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
                    Проекти
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Проекти
                        </a>
                    </li>
                    <li>
                        <a href=\"/projects/";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "category", array()), "html", null, true);
        echo "\">
                            ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"active\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "
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
        <!--blog start-->
        <div class=\"col-lg-10\">
            <div class=\"blog-item\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-sm-2\">
                        <div class=\"date-wrap\">
                          <span class=\"date\">
                            ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "created_at", array()), "d"), "html", null, true);
        echo "
                          </span>
                          <span class=\"month\">
                            ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "created_at", array()), "F"), "html", null, true);
        echo "
                          </span>
                        </div>

                    </div>
                    <div class=\"col-lg-10 col-sm-10\">


                        <div class=\"blog-img gs\">
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "photo", array()), "path", array()), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-2 col-sm-2 text-right\"></div>
                    <div class=\"col-lg-10 col-sm-10\">
                        <h1>
                            ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "
                        </h1>
                        ";
        // line 65
        echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description", array());
        echo "
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!--container end-->";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/project.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 65,  101 => 63,  89 => 54,  77 => 45,  71 => 42,  49 => 23,  42 => 19,  38 => 18,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Проекти*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Проекти*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/projects/{{ item.category }}">*/
/*                             {{ category }}*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         {{ item.title }}*/
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
/*         <!--blog start-->*/
/*         <div class="col-lg-10">*/
/*             <div class="blog-item">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-2 col-sm-2">*/
/*                         <div class="date-wrap">*/
/*                           <span class="date">*/
/*                             {{ item.created_at|date('d') }}*/
/*                           </span>*/
/*                           <span class="month">*/
/*                             {{ item.created_at|date('F') }}*/
/*                           </span>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="col-lg-10 col-sm-10">*/
/* */
/* */
/*                         <div class="blog-img gs">*/
/*                             <img src="{{ item.photo.path }}" alt=""/>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-2 col-sm-2 text-right"></div>*/
/*                     <div class="col-lg-10 col-sm-10">*/
/*                         <h1>*/
/*                             {{ item.title }}*/
/*                         </h1>*/
/*                         {{ item.description|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* <!--container end-->*/
