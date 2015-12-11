<?php

/* /var/www/GenderStudies/themes/site/pages/index.htm */
class __TwigTemplate_e661d23499a689797c35f772cda1961ea5cca41f96f7af96741d3b391b5a50ed extends Twig_Template
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
        echo "<div class=\"home-slideshow\">
    <div id=\"slider-wrap\">
        <div id=\"slider\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slider"]) ? $context["slider"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 5
            echo "                <div class=\"slide\">
                    <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "path", array()), "html", null, true);
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </div>
        <div class=\"sli-links\">
            <span class=\"control-slide\">1</span>
            <span class=\"control-slide\">2</span>
            <span class=\"control-slide active\">3</span>

            ";
        // line 15
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
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 16
            echo "                <span class=\"control-slide ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo " active ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true);
            echo "</span>
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
        // line 18
        echo "        </div>
    </div>
</div>
<div class=\"slideshow-line-bottom\"></div>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"feature-box right-line left-line\">
                <div class=\"col-lg-12 recent container\">

                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main"]) ? $context["main"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "                        <div class=\"col-md-6 col-sm-6 text-center wow fadeInUp\">
                            <div class=\"feature-box-heading\">
                                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["link"], "photo", array()), "path", array()), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"\" width=\"200\" height=\"200\">
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "link", array()), "html", null, true);
            echo "\">
                                    <h4>
                                        <b>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
            echo "</b>
                                    </h4>
                                </a>
                            </div>
                            <p class=\"text-center\">
                                ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "description", array()), "html", null, true);
            echo "
                            </p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </div>

                <div class=\"col-lg-12 recent container\">
                    ";
        // line 47
        if (($this->getAttribute((isset($context["partners"]) ? $context["partners"] : null), "count", array()) > 0)) {
            // line 48
            echo "                        <h3 class=\"recent-work\">
                            Посилання
                        </h3>
                        <div id=\"owl-demo\" class=\"owl-carousel owl-theme wow fadeIn\">
                            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partners"]) ? $context["partners"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 53
                echo "                                <div class=\"item view view-tenth\">
                                    <img src=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["partner"], "photo", array()), "path", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "title", array()), "html", null, true);
                echo "\">
                                    <div class=\"mask\">
                                        <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "site", array()), "html", null, true);
                echo "\" class=\"info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "site", array()), "html", null, true);
                echo "\">
                                            <i class=\"fa fa-link\">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </div>
                    ";
        }
        // line 65
        echo "                </div>

            </div>
        </div>

        <div class=\"col-md-4 col-sm-12 right-line ot-top\">
            <div class=\"content-blocks\">
                ";
        // line 72
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "length", array()) > 0)) {
            // line 73
            echo "                    <div class=\"blog-post wow fadeInRight animated\">
                        <h3 class=\"text-center\">
                            Актуально
                        </h3>
                        <div class=\"hr\">
                            <span class=\"hr-inner\"></span>
                        </div>

                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                echo "                            <div class=\"media\">
                                <a class=\"pull-left\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\">
                                    <img class=\" \" src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "html", null, true);
                echo "\" alt=\"\">
                                </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading text-center\">
                                        <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\">
                                            ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                        </a>
                                    </h5>
                                    <p>
                                        ";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                    </div>
                ";
        }
        // line 100
        echo "            </div>
            <div class=\"content-blocks\">
                ";
        // line 102
        if (($this->getAttribute((isset($context["needKnow"]) ? $context["needKnow"] : null), "length", array()) > 0)) {
            // line 103
            echo "                    <div class=\"blog-post wow fadeInRight animated\">
                        <h3 class=\"text-center\">
                            Потрібно знати
                        </h3>
                        <div class=\"hr\">
                            <span class=\"hr-inner\"></span>
                        </div>

                        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["needKnow"]) ? $context["needKnow"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 112
                echo "                            <div class=\"media\">
                                <a class=\"pull-left\" href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\">
                                    <img class=\" \" src=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "photo", array()), "path", array()), "html", null, true);
                echo "\" alt=\"\">
                                </a>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading text-center\">
                                        <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "\">
                                            ";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
                                        </a>
                                    </h5>
                                    <p>
                                        ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                echo "
                                    </p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                    </div>
                ";
        }
        // line 130
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 130,  301 => 128,  290 => 123,  283 => 119,  279 => 118,  272 => 114,  268 => 113,  265 => 112,  261 => 111,  251 => 103,  249 => 102,  245 => 100,  241 => 98,  230 => 93,  223 => 89,  219 => 88,  212 => 84,  208 => 83,  205 => 82,  201 => 81,  191 => 73,  189 => 72,  180 => 65,  176 => 63,  161 => 56,  154 => 54,  151 => 53,  147 => 52,  141 => 48,  139 => 47,  134 => 44,  124 => 40,  116 => 35,  111 => 33,  107 => 32,  103 => 30,  99 => 29,  86 => 18,  65 => 16,  48 => 15,  40 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="home-slideshow">*/
/*     <div id="slider-wrap">*/
/*         <div id="slider">*/
/*             {% for photo in slider %}*/
/*                 <div class="slide">*/
/*                     <img src="{{ photo.path }}">*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <div class="sli-links">*/
/*             <span class="control-slide">1</span>*/
/*             <span class="control-slide">2</span>*/
/*             <span class="control-slide active">3</span>*/
/* */
/*             {% for photo in slider %}*/
/*                 <span class="control-slide {% if loop.index == 1%} active {% endif %}">{{ loop.index - 1 }}</span>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="slideshow-line-bottom"></div>*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-8">*/
/*             <div class="feature-box right-line left-line">*/
/*                 <div class="col-lg-12 recent container">*/
/* */
/*                     {% for link in main %}*/
/*                         <div class="col-md-6 col-sm-6 text-center wow fadeInUp">*/
/*                             <div class="feature-box-heading">*/
/*                                 <img src="{{ link.photo.path }}" class="img-circle" alt="" width="200" height="200">*/
/*                                 <a href="{{ link.link }}">*/
/*                                     <h4>*/
/*                                         <b>{{ link.title }}</b>*/
/*                                     </h4>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <p class="text-center">*/
/*                                 {{ link.description }}*/
/*                             </p>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*                 <div class="col-lg-12 recent container">*/
/*                     {% if partners.count > 0 %}*/
/*                         <h3 class="recent-work">*/
/*                             Посилання*/
/*                         </h3>*/
/*                         <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">*/
/*                             {% for partner in partners %}*/
/*                                 <div class="item view view-tenth">*/
/*                                     <img src="{{ partner.photo.path }}" alt="{{ partner.title }}">*/
/*                                     <div class="mask">*/
/*                                         <a href="{{ partner.site }}" class="info" data-toggle="tooltip" data-placement="top" title="{{ partner.site }}">*/
/*                                             <i class="fa fa-link">*/
/*                                             </i>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-4 col-sm-12 right-line ot-top">*/
/*             <div class="content-blocks">*/
/*                 {% if news.length > 0 %}*/
/*                     <div class="blog-post wow fadeInRight animated">*/
/*                         <h3 class="text-center">*/
/*                             Актуально*/
/*                         </h3>*/
/*                         <div class="hr">*/
/*                             <span class="hr-inner"></span>*/
/*                         </div>*/
/* */
/*                         {% for item in news %}*/
/*                             <div class="media">*/
/*                                 <a class="pull-left" href="{{ item.link }}">*/
/*                                     <img class=" " src="{{ item.photo.path }}" alt="">*/
/*                                 </a>*/
/*                                 <div class="media-body">*/
/*                                     <h5 class="media-heading text-center">*/
/*                                         <a href="{{ item.link }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </h5>*/
/*                                     <p>*/
/*                                         {{ item.description }}*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="content-blocks">*/
/*                 {% if needKnow.length > 0 %}*/
/*                     <div class="blog-post wow fadeInRight animated">*/
/*                         <h3 class="text-center">*/
/*                             Потрібно знати*/
/*                         </h3>*/
/*                         <div class="hr">*/
/*                             <span class="hr-inner"></span>*/
/*                         </div>*/
/* */
/*                         {% for item in needKnow %}*/
/*                             <div class="media">*/
/*                                 <a class="pull-left" href="{{ item.link }}">*/
/*                                     <img class=" " src="{{ item.photo.path }}" alt="">*/
/*                                 </a>*/
/*                                 <div class="media-body">*/
/*                                     <h5 class="media-heading text-center">*/
/*                                         <a href="{{ item.link }}">*/
/*                                             {{ item.title }}*/
/*                                         </a>*/
/*                                     </h5>*/
/*                                     <p>*/
/*                                         {{ item.description }}*/
/*                                     </p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
