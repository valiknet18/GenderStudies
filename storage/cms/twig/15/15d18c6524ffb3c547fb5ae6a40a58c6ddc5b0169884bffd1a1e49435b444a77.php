<?php

/* /var/www/GenderStudies/themes/site/pages/projects.htm */
class __TwigTemplate_d0cbb9e8f6816c455d9eebb411764e001c4ee398eb2a3315e09ad100e912d351 extends Twig_Template
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
                    <li class=\"active\">
                        ";
        // line 18
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "            <div class=\"col-sm-4 col-md-4\">
                <div class=\"post wow zoomIn\">
                    <div class=\"post-img-content\">
                        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "html", null, true);
            echo "\" class=\"img-responsive\" />
                        <span class=\"post-title\">
                            <b>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</b><br />
                        </span>
                    </div>
                    <div class=\"content\">
                        <div>
                            ";
            // line 41
            echo $this->getAttribute($context["item"], "short_description", array());
            echo "
                        </div>
                        <div>
                            <a href=\"/projects/";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array()), "html", null, true);
            echo "/item/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Читать</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
    <div class=\"col-md-12\">
        <div class=\"text-center\">
            ";
        // line 53
        echo (isset($context["projects"]) ? $context["projects"] : null);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/projects.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  95 => 50,  81 => 44,  75 => 41,  67 => 36,  62 => 34,  57 => 31,  53 => 30,  38 => 18,  19 => 1,);
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
/*         {% for item in projects %}*/
/*             <div class="col-sm-4 col-md-4">*/
/*                 <div class="post wow zoomIn">*/
/*                     <div class="post-img-content">*/
/*                         <img src="{{ item.photo.path }}" class="img-responsive" />*/
/*                         <span class="post-title">*/
/*                             <b>{{ item.title }}</b><br />*/
/*                         </span>*/
/*                     </div>*/
/*                     <div class="content">*/
/*                         <div>*/
/*                             {{ item.short_description|raw }}*/
/*                         </div>*/
/*                         <div>*/
/*                             <a href="/projects/{{ item.category }}/item/{{ item.slug }}" class="btn btn-primary btn-sm">Читать</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="col-md-12">*/
/*         <div class="text-center">*/
/*             {{ projects|raw }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
