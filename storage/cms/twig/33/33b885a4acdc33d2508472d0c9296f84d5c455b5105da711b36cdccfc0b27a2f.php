<?php

/* /var/www/GenderStudies/themes/site/pages/structure.htm */
class __TwigTemplate_46d438307107693b010d13c0f89e2d2f7baf8e50d4c6132610a486faf3b809ef extends Twig_Template
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
                    Структура
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Про центр
                        </a>
                    </li>
                    <li class=\"active\">
                        Структура
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
        <div class=\"col-lg-12\">
            <h3 class=\"text-center\">Структура</h3>
            <ul class=\"timeline\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["structures"]) ? $context["structures"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                    <li class=\"";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                echo " timeline-inverted ";
            }
            echo "  wow zoomIn\">
                        <div class=\"timeline-image\">
                            <img class=\"img-circle img-responsive\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">
                        </div>
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h4>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "full_name", array()), "html", null, true);
            echo "</h4>
                                <h4 class=\"subheading\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
                            </div>
                            <div class=\"timeline-body\">
                                <p class=\"text-muted\">
                                    ";
            // line 45
            echo $this->getAttribute($context["item"], "description", array());
            echo "
                                </p>
                            </div>
                        </div>

                        ";
            // line 50
            if (($this->getAttribute((isset($context["structures"]) ? $context["structures"] : null), "count", array()) > $this->getAttribute($context["loop"], "index", array()))) {
                // line 51
                echo "                            <div class=\"line wow zoomIn\"></div>
                        ";
            }
            // line 53
            echo "                    </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
        </div>
    </div>
</div>
<div class=\"col-lg-12 otstup-bottom-1\">

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/structure.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 55,  110 => 53,  106 => 51,  104 => 50,  96 => 45,  89 => 41,  85 => 40,  78 => 36,  70 => 34,  53 => 33,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Структура*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Про центр*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         Структура*/
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
/*         <div class="col-lg-12">*/
/*             <h3 class="text-center">Структура</h3>*/
/*             <ul class="timeline">*/
/*                 {% for item in structures %}*/
/*                     <li class="{% if (loop.index % 2) == 0 %} timeline-inverted {% endif %}  wow zoomIn">*/
/*                         <div class="timeline-image">*/
/*                             <img class="img-circle img-responsive" src="{{ item.photo.path }}" alt="">*/
/*                         </div>*/
/*                         <div class="timeline-panel">*/
/*                             <div class="timeline-heading">*/
/*                                 <h4>{{ item.full_name }}</h4>*/
/*                                 <h4 class="subheading">{{ item.title }}</h4>*/
/*                             </div>*/
/*                             <div class="timeline-body">*/
/*                                 <p class="text-muted">*/
/*                                     {{ item.description|raw }}*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% if structures.count > loop.index %}*/
/*                             <div class="line wow zoomIn"></div>*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="col-lg-12 otstup-bottom-1">*/
/* */
/* </div>*/
