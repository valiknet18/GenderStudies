<?php

/* /var/www/GenderStudies/themes/site/pages/album.htm */
class __TwigTemplate_2913e3dd97cac5a8efebf1bb406ccb890a55da4543ce8452c1f74b8c617bfde4 extends Twig_Template
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
        echo "<div class=\"breadcrumbs\">
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
                        Фотографії
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->

<!--container start-->

<div class=\"container\">
    <div id=\"main_area\">
        <!-- Slider -->
        <div class=\"row\">
            <div class=\"col-sm-4 wow flipInY\" id=\"slider-thumbs\">
                <!-- Bottom switcher of slider -->
                <ul class=\"hide-bullets\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["album"]) ? $context["album"] : null), "photos", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 36
            echo "                        <li class=\"col-sm-3\">
                            <a class=\"thumbnail\" id=\"carousel-selector-";
            // line 37
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\">
                            </a>
                        </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </ul>
            </div>
            <div class=\"col-sm-8  wow flipInX\">
                <div class=\"col-xs-12\" id=\"slider\">
                    <!-- Top part of the slider -->
                    <div class=\"row\">
                        <div class=\"col-sm-12\" id=\"carousel-bounding-box\">
                            <div class=\"carousel slide\" id=\"myCarousel\">
                                <!-- Carousel items -->
                                <div class=\"carousel-inner\">
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["album"]) ? $context["album"] : null), "photos", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 53
            echo "                                        <div class=\"";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " active ";
            }
            echo " item\" data-slide-number=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </div>
                                <!-- Carousel nav -->
                                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-icon glyphicon glyphicon-chevron-left\"></span>
                                </a>
                                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-icon glyphicon glyphicon-chevron-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/album.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  135 => 54,  126 => 53,  109 => 52,  97 => 42,  79 => 38,  75 => 37,  72 => 36,  55 => 35,  19 => 1,);
    }
}
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
/*                         Фотографії*/
/*                     </li>*/
/*                 </ol>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <!--breadcrumbs end-->*/
/* */
/* <!--container start-->*/
/* */
/* <div class="container">*/
/*     <div id="main_area">*/
/*         <!-- Slider -->*/
/*         <div class="row">*/
/*             <div class="col-sm-4 wow flipInY" id="slider-thumbs">*/
/*                 <!-- Bottom switcher of slider -->*/
/*                 <ul class="hide-bullets">*/
/*                     {% for photo in album.photos %}*/
/*                         <li class="col-sm-3">*/
/*                             <a class="thumbnail" id="carousel-selector-{{ loop.index - 1 }}">*/
/*                                 <img src="{{ photo.path }}">*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-sm-8  wow flipInX">*/
/*                 <div class="col-xs-12" id="slider">*/
/*                     <!-- Top part of the slider -->*/
/*                     <div class="row">*/
/*                         <div class="col-sm-12" id="carousel-bounding-box">*/
/*                             <div class="carousel slide" id="myCarousel">*/
/*                                 <!-- Carousel items -->*/
/*                                 <div class="carousel-inner">*/
/*                                     {% for photo in album.photos %}*/
/*                                         <div class="{% if loop.index == 1 %} active {% endif %} item" data-slide-number="{{ loop.index - 1 }}">*/
/*                                             <img src="{{ photo.path }}">*/
/*                                         </div>*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                                 <!-- Carousel nav -->*/
/*                                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                                     <span class="carousel-control-icon glyphicon glyphicon-chevron-left"></span>*/
/*                                 </a>*/
/*                                 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                                     <span class="carousel-control-icon glyphicon glyphicon-chevron-right"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!--/Slider-->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
