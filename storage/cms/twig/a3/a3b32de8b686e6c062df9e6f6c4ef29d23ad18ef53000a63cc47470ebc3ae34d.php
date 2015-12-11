<?php

/* /var/www/GenderStudies/themes/site/pages/history.htm */
class __TwigTemplate_24077947a6ce67cc31d73edf046a5e85ea5b29d27c835410efab7f0f845ddaa3 extends Twig_Template
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
                    Історія
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
                        Історія
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
        <div class=\"col-lg-5\">
            <div class=\"about-carousel wow fadeInLeft\">
                <div id=\"myCarousel\" class=\"carousel slide\">
                    <!-- Carousel items -->
                    <div class=\"carousel-inner\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : null));
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
            // line 36
            echo "                            <div class=\"";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " active ";
            }
            echo " item\">
                                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\">
                            </div>
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
        // line 40
        echo "                    </div>
                    <!-- Carousel nav -->
                    <a class=\"carousel-control left\" href=\"#myCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-angle-left\">
                        </i>
                    </a>
                    <a class=\"carousel-control right\" href=\"#myCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-angle-right\">
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-lg-7 about wow fadeInRight\">
            ";
        // line 54
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/history.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 54,  96 => 40,  79 => 37,  72 => 36,  55 => 35,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Історія*/
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
/*                         Історія*/
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
/*         <div class="col-lg-5">*/
/*             <div class="about-carousel wow fadeInLeft">*/
/*                 <div id="myCarousel" class="carousel slide">*/
/*                     <!-- Carousel items -->*/
/*                     <div class="carousel-inner">*/
/*                         {% for item in slider %}*/
/*                             <div class="{% if loop.index == 1 %} active {% endif %} item">*/
/*                                 <img src="{{ item.photo.path }}" alt="">*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                     <!-- Carousel nav -->*/
/*                     <a class="carousel-control left" href="#myCarousel" data-slide="prev">*/
/*                         <i class="fa fa-angle-left">*/
/*                         </i>*/
/*                     </a>*/
/*                     <a class="carousel-control right" href="#myCarousel" data-slide="next">*/
/*                         <i class="fa fa-angle-right">*/
/*                         </i>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-lg-7 about wow fadeInRight">*/
/*             {{ history|raw }}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
