<?php

/* /var/www/GenderStudies/themes/site/pages/books.htm */
class __TwigTemplate_2fe5dd42f028c153f912fb8b36e376f2576a680b0cbbdc97f94e6267bdceed28 extends Twig_Template
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
                        Книги
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 32
            echo "            <div class=\"col-sm-6 col-md-6 bt-bottom wow zoomIn\">
                <div class=\"col-sm-4 col-md-4\">
                    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["book"], "photo", array()), "path", array()), "html", null, true);
            echo "\"
                         alt=\"\" class=\"img-rounded img-responsive\"/>
                </div>
                <div class=\"col-sm-8 col-md-8\">
                    <blockquote>
                        <p>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "author", array()), "html", null, true);
            echo "</p>
                        <small><cite title=\"Source Title\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</cite></small>
                        <p>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "description", array()), "html", null, true);
            echo "
                        </p>
                    </blockquote>
                    <p>
                        <i class=\"glyphicon glyphicon-calendar\"></i> ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["book"], "released_at", array()), "d.m.Y"), "html", null, true);
            echo "
                        <br/><i class=\"glyphicon glyphicon-floppy-save\"></i>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "link_to_book", array()), "html", null, true);
            echo "\" class=\"label label-tema\"> Скачать</a>
                    </p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/pages/books.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 53,  88 => 48,  83 => 46,  76 => 42,  71 => 40,  67 => 39,  59 => 34,  55 => 32,  51 => 31,  19 => 1,);
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
/*                         Книги*/
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
/*         {% for book in books %}*/
/*             <div class="col-sm-6 col-md-6 bt-bottom wow zoomIn">*/
/*                 <div class="col-sm-4 col-md-4">*/
/*                     <img src="{{ book.photo.path }}"*/
/*                          alt="" class="img-rounded img-responsive"/>*/
/*                 </div>*/
/*                 <div class="col-sm-8 col-md-8">*/
/*                     <blockquote>*/
/*                         <p>{{ book.author }}</p>*/
/*                         <small><cite title="Source Title">{{ book.title }}</cite></small>*/
/*                         <p>*/
/*                             {{ book.description }}*/
/*                         </p>*/
/*                     </blockquote>*/
/*                     <p>*/
/*                         <i class="glyphicon glyphicon-calendar"></i> {{ book.released_at|date('d.m.Y') }}*/
/*                         <br/><i class="glyphicon glyphicon-floppy-save"></i>*/
/*                         <a href="{{ book.link_to_book }}" class="label label-tema"> Скачать</a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
