<?php

/* /var/www/GenderStudies/themes/site/pages/news.htm */
class __TwigTemplate_5e8912b12b05d98154f4f57b4b33291029cf1f1907643a6fcd4b585f1ef2db85 extends Twig_Template
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
        echo "<!--header end-->

<!--breadcrumbs start-->
<div class=\"breadcrumbs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-4\">
                <h1>
                    Новини
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Новини
                        </a>
                    </li>
                    <li class=\"active\">
                        ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
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

        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "            <div class=\"col-md-6\">
                <div class=\"blog-left wow fadeInLeft\">
                    <div class=\"blog-img\">
                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\"/>
                    </div>
                    <div class=\"blog-content\">
                        <h3>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
                        </h3>
                        <p>
                            ";
            // line 44
            echo $this->getAttribute($context["item"], "short_description", array());
            echo "
                        </p>
                    </div>
                    <a href=\"/news/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array()), "html", null, true);
            echo "/item/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">Читати</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        <!--blog end-->
    </div>

    <div class=\"text-center col-md-12\">
        ";
        // line 55
        echo (isset($context["news"]) ? $context["news"] : null);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  96 => 51,  84 => 47,  78 => 44,  72 => 41,  65 => 37,  60 => 34,  56 => 33,  40 => 20,  19 => 1,);
    }
}
/* <!--header end-->*/
/* */
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Новини*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Новини*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         {{ category }}*/
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
/* */
/*         {% for item in news %}*/
/*             <div class="col-md-6">*/
/*                 <div class="blog-left wow fadeInLeft">*/
/*                     <div class="blog-img">*/
/*                         <img src="{{ item.photo.path }}" alt=""/>*/
/*                     </div>*/
/*                     <div class="blog-content">*/
/*                         <h3>*/
/*                             {{ item.title }}*/
/*                         </h3>*/
/*                         <p>*/
/*                             {{ item.short_description|raw }}*/
/*                         </p>*/
/*                     </div>*/
/*                     <a href="/news/{{ item.category }}/item/{{ item.slug }}" class="btn btn-primary">Читати</a>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         <!--blog end-->*/
/*     </div>*/
/* */
/*     <div class="text-center col-md-12">*/
/*         {{ news|raw }}*/
/*     </div>*/
/* </div>*/
