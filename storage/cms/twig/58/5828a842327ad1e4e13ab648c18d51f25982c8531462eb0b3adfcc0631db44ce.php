<?php

/* /var/www/GenderStudies/themes/site/pages/articles.htm */
class __TwigTemplate_339969a426748eb4e403a559619cb64dc31865617c78166d5b45e1abb82d5034 extends Twig_Template
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
                        Статі
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
        <div class=\"col-lg-9 \">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "                <div class=\"blog-item wow bounceInUp\">
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-sm-2\">
                            <div class=\"date-wrap\">
                              <span class=\"date\">
                                ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "created_at", array()), "d"), "html", null, true);
            echo "
                              </span>
                              <span class=\"month\">
                                ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "created_at", array()), "F"), "html", null, true);
            echo "
                              </span>
                            </div>
                        </div>
                        <div class=\"col-lg-10 col-sm-10\">
                            <div class=\"blog-img\">
                                <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2 col-sm-2 text-right\"></div>
                        <div class=\"col-lg-10 col-sm-10\">
                            <h1>
                                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
                            </h1>
                            ";
            // line 57
            echo $this->getAttribute($context["article"], "short_description", array());
            echo "
                            <a href=\"/articles/";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "slug", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                                Читать
                            </a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
            <div class=\"text-center\">
                ";
        // line 67
        echo (isset($context["articles"]) ? $context["articles"] : null);
        echo "
            </div>

        </div>

        <div class=\"col-lg-3\">
            <div class=\"blog-side-item\">
                <!--<div class=\"search-row\">-->
                    <!--<input type=\"text\" class=\"form-control\" placeholder=\"Search here\">-->
                <!--</div>-->

                <div class=\"blog-post\">
                    <h3>
                        Останні публікації
                    </h3>

                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 84
            echo "                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"javascript:;\">
                                <img class=\" \" src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "photo", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\" />
                            </a>
                            <div class=\"media-body\">
                                <h5 class=\"media-heading\">
                                    <a href=\"javascript:;\">
                                        ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
                                    </a>
                                </h5>
                                <p>
                                    ";
            // line 95
            echo $this->getAttribute($context["article"], "short_description", array());
            echo "
                                </p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </div>

                <div class=\"tags\">
                    <h3>
                        Теги
                    </h3>
                    <ul class=\"tag\">
                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 108
            echo "                            <li>
                                <a href=\"/tags/";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "slug", array()), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-tags pr-5\"></i>
                                    ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "title", array()), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                    </ul>
                </div>

                <!--<div class=\"archive\">-->
                    <!--<h3>-->
                        <!--Архив-->
                    <!--</h3>-->
                    <!--<ul class=\"list-unstyled\">-->
                        <!--<li>-->
                            <!--<a href=\"javascript:;\">-->
                                <!--<i class=\"fa fa-angle-double-right pr-10\">-->
                                <!--</i>-->
                                <!--May 2014-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href=\"javascript:;\">-->
                                <!--<i class=\"fa fa-angle-double-right pr-10\">-->
                                <!--</i>-->
                                <!--April 2014-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href=\"javascript:;\">-->
                                <!--<i class=\"fa fa-angle-double-right pr-10\">-->
                                <!--</i>-->
                                <!--March 2014-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href=\"javascript:;\">-->
                                <!--<i class=\"fa fa-angle-double-right pr-10\">-->
                                <!--</i>-->
                                <!--February 2014-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href=\"javascript:;\">-->
                                <!--<i class=\"fa fa-angle-double-right pr-10\">-->
                                <!--</i>-->
                                <!--January 2014-->
                            <!--</a>-->
                        <!--</li>-->
                    <!--</ul>-->
                <!--</div>-->


            </div>
        </div>

        <!--blog end-->
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/articles.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 115,  189 => 111,  184 => 109,  181 => 108,  177 => 107,  168 => 100,  157 => 95,  150 => 91,  142 => 86,  138 => 84,  134 => 83,  115 => 67,  111 => 65,  98 => 58,  94 => 57,  89 => 55,  78 => 47,  69 => 41,  63 => 38,  56 => 33,  52 => 32,  19 => 1,);
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
/*                         Статі*/
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
/*         <div class="col-lg-9 ">*/
/*             {% for article in articles %}*/
/*                 <div class="blog-item wow bounceInUp">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-2 col-sm-2">*/
/*                             <div class="date-wrap">*/
/*                               <span class="date">*/
/*                                 {{ article.created_at|date('d') }}*/
/*                               </span>*/
/*                               <span class="month">*/
/*                                 {{ article.created_at|date('F') }}*/
/*                               </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-lg-10 col-sm-10">*/
/*                             <div class="blog-img">*/
/*                                 <img src="{{ article.photo.path }}" alt=""/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-2 col-sm-2 text-right"></div>*/
/*                         <div class="col-lg-10 col-sm-10">*/
/*                             <h1>*/
/*                                 {{ article.title }}*/
/*                             </h1>*/
/*                             {{ article.short_description|raw }}*/
/*                             <a href="/articles/{{ article.slug }}" class="btn btn-primary">*/
/*                                 Читать*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             <div class="text-center">*/
/*                 {{ articles|raw }}*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="col-lg-3">*/
/*             <div class="blog-side-item">*/
/*                 <!--<div class="search-row">-->*/
/*                     <!--<input type="text" class="form-control" placeholder="Search here">-->*/
/*                 <!--</div>-->*/
/* */
/*                 <div class="blog-post">*/
/*                     <h3>*/
/*                         Останні публікації*/
/*                     </h3>*/
/* */
/*                     {% for article in articles|slice(0, 3) %}*/
/*                         <div class="media">*/
/*                             <a class="pull-left" href="javascript:;">*/
/*                                 <img class=" " src="{{ article.photo.path }}" alt="" />*/
/*                             </a>*/
/*                             <div class="media-body">*/
/*                                 <h5 class="media-heading">*/
/*                                     <a href="javascript:;">*/
/*                                         {{ article.title }}*/
/*                                     </a>*/
/*                                 </h5>*/
/*                                 <p>*/
/*                                     {{ article.short_description|raw }}*/
/*                                 </p>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*                 <div class="tags">*/
/*                     <h3>*/
/*                         Теги*/
/*                     </h3>*/
/*                     <ul class="tag">*/
/*                         {% for tag in tags %}*/
/*                             <li>*/
/*                                 <a href="/tags/{{ tag.slug }}">*/
/*                                     <i class="fa fa-tags pr-5"></i>*/
/*                                     {{ tag.title }}*/
/*                                 </a>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <!--<div class="archive">-->*/
/*                     <!--<h3>-->*/
/*                         <!--Архив-->*/
/*                     <!--</h3>-->*/
/*                     <!--<ul class="list-unstyled">-->*/
/*                         <!--<li>-->*/
/*                             <!--<a href="javascript:;">-->*/
/*                                 <!--<i class="fa fa-angle-double-right pr-10">-->*/
/*                                 <!--</i>-->*/
/*                                 <!--May 2014-->*/
/*                             <!--</a>-->*/
/*                         <!--</li>-->*/
/*                         <!--<li>-->*/
/*                             <!--<a href="javascript:;">-->*/
/*                                 <!--<i class="fa fa-angle-double-right pr-10">-->*/
/*                                 <!--</i>-->*/
/*                                 <!--April 2014-->*/
/*                             <!--</a>-->*/
/*                         <!--</li>-->*/
/*                         <!--<li>-->*/
/*                             <!--<a href="javascript:;">-->*/
/*                                 <!--<i class="fa fa-angle-double-right pr-10">-->*/
/*                                 <!--</i>-->*/
/*                                 <!--March 2014-->*/
/*                             <!--</a>-->*/
/*                         <!--</li>-->*/
/*                         <!--<li>-->*/
/*                             <!--<a href="javascript:;">-->*/
/*                                 <!--<i class="fa fa-angle-double-right pr-10">-->*/
/*                                 <!--</i>-->*/
/*                                 <!--February 2014-->*/
/*                             <!--</a>-->*/
/*                         <!--</li>-->*/
/*                         <!--<li>-->*/
/*                             <!--<a href="javascript:;">-->*/
/*                                 <!--<i class="fa fa-angle-double-right pr-10">-->*/
/*                                 <!--</i>-->*/
/*                                 <!--January 2014-->*/
/*                             <!--</a>-->*/
/*                         <!--</li>-->*/
/*                     <!--</ul>-->*/
/*                 <!--</div>-->*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <!--blog end-->*/
/*     </div>*/
/* */
/* </div>*/
