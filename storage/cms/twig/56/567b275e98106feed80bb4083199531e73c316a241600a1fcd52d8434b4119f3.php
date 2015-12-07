<?php

/* /var/www/GenderStudies/themes/site/pages/museum-detail.htm */
class __TwigTemplate_266e0fcc6eadbf7882f014d56a37f6baf02e5b46d748637a84e95127b9ee0a97 extends Twig_Template
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
                    Альбом
                </h1>
            </div>
            <div class=\"col-lg-8 col-sm-8\">
                <ol class=\"breadcrumb pull-right\">
                    <li>
                        <a href=\"#\">
                            Галерея
                        </a>
                    </li>
                    <li>
                        <a href=\"/museum\">
                            Віртуальний музей
                        </a>
                    </li>
                    <li class=\"active\">
                        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : null), "title", array()), "html", null, true);
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
    <div class=\"row form-group\">
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            echo "        <div class=\"col-xs-12 col-md-6 wow flipInY\">
            <div class=\"panel panel-default shadow-conteiner\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "</h3>
                </div>
                <div class=\"panel-image hide-panel-body\">
                    <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" class=\"panel-image-preview\" />
                    <label for=\"toggle-";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"></label>
                </div>
                <input type=\"checkbox\" style=\"display:none;\" id=\"toggle-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-image-toggle\">
                <div class=\"panel-body\">
                    <h4>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "</h4>
                    <p>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"panel-footer text-center\">
                    <!--<a href=\"#facebook\"><span class=\"fa fa-facebook\"></span></a>-->
                    <!--<a href=\"#twitter\"><span class=\"fa fa-twitter\"></span></a>-->
                    <!--<a href=\"#share\"><span class=\"fa fa-vk\"></span></a>-->
                </div>
            </div>
        </div>

        ";
            // line 58
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 59
                echo "            </div>
            <div class=\"row form-group\">
        ";
            }
            // line 62
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div>

    <!--<div class=\"row\">-->
        <!--";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["album"]) ? $context["album"] : null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo "-->
            <!--<div class=\"col-md-6\">-->
                <!--<div class=\"blog-left wow fadeInLeft\">-->
                    <!--<div class=\"blog-img\">-->
                        <!--<img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
            echo "\" alt=\"\"/>-->
                    <!--</div>-->
                    <!--<div class=\"blog-content\">-->
                        <!--<h3>-->
                            <!--";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
            echo "-->
                        <!--</h3>-->
                        <!--<p>-->
                            <!--";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "-->
                        <!--</p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "-->
        <!--&lt;!&ndash;blog end&ndash;&gt;-->
    <!--</div>-->
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/museum-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 82,  165 => 77,  159 => 74,  152 => 70,  143 => 66,  138 => 63,  124 => 62,  119 => 59,  117 => 58,  104 => 48,  100 => 47,  95 => 45,  90 => 43,  86 => 42,  80 => 39,  75 => 36,  58 => 35,  43 => 23,  19 => 1,);
    }
}
/* <!--breadcrumbs start-->*/
/* <div class="breadcrumbs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-sm-4">*/
/*                 <h1>*/
/*                     Альбом*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="col-lg-8 col-sm-8">*/
/*                 <ol class="breadcrumb pull-right">*/
/*                     <li>*/
/*                         <a href="#">*/
/*                             Галерея*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="/museum">*/
/*                             Віртуальний музей*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         {{ album.title }}*/
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
/*     <div class="row form-group">*/
/*     {% for image in album.photos %}*/
/*         <div class="col-xs-12 col-md-6 wow flipInY">*/
/*             <div class="panel panel-default shadow-conteiner">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">{{ image.title }}</h3>*/
/*                 </div>*/
/*                 <div class="panel-image hide-panel-body">*/
/*                     <img src="{{ image.path }}" class="panel-image-preview" />*/
/*                     <label for="toggle-{{ loop.index }}"></label>*/
/*                 </div>*/
/*                 <input type="checkbox" style="display:none;" id="toggle-{{ loop.index }}" class="panel-image-toggle">*/
/*                 <div class="panel-body">*/
/*                     <h4>{{ image.title }}</h4>*/
/*                     <p>{{ image.description }}</p>*/
/*                 </div>*/
/*                 <div class="panel-footer text-center">*/
/*                     <!--<a href="#facebook"><span class="fa fa-facebook"></span></a>-->*/
/*                     <!--<a href="#twitter"><span class="fa fa-twitter"></span></a>-->*/
/*                     <!--<a href="#share"><span class="fa fa-vk"></span></a>-->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if (loop.index % 2) == 0 %}*/
/*             </div>*/
/*             <div class="row form-group">*/
/*         {% endif %}*/
/*     {% endfor %}*/
/*     </div>*/
/* */
/*     <!--<div class="row">-->*/
/*         <!--{% for image in album.photos %}-->*/
/*             <!--<div class="col-md-6">-->*/
/*                 <!--<div class="blog-left wow fadeInLeft">-->*/
/*                     <!--<div class="blog-img">-->*/
/*                         <!--<img src="{{ image.path }}" alt=""/>-->*/
/*                     <!--</div>-->*/
/*                     <!--<div class="blog-content">-->*/
/*                         <!--<h3>-->*/
/*                             <!--{{ image.title }}-->*/
/*                         <!--</h3>-->*/
/*                         <!--<p>-->*/
/*                             <!--{{ image.description }}-->*/
/*                         <!--</p>-->*/
/*                     <!--</div>-->*/
/*                 <!--</div>-->*/
/*             <!--</div>-->*/
/*         <!--{% endfor %}-->*/
/*         <!--&lt;!&ndash;blog end&ndash;&gt;-->*/
/*     <!--</div>-->*/
/* </div>*/
