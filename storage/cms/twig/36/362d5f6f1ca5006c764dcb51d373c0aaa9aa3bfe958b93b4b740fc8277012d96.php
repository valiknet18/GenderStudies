<?php

/* /var/www/GenderStudies/themes/site/partials/footer.htm */
class __TwigTemplate_36b03ef592f98cd7758464a9e4a9a1e6744d48d1fb9191ab63dc1a4123ce2681 extends Twig_Template
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
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-sm-6 col-xs-12 address wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".1s\">
                <h1>
                    Контакти
                </h1>
                <address>
                    ";
        // line 9
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "address", array())) {
            // line 10
            echo "                        <p><i class=\"fa fa-home pr-10\"></i>Адреса: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "address", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 12
        echo "
                    ";
        // line 13
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone1", array())) {
            // line 14
            echo "                        <p><i class=\"fa fa-phone pr-10\"></i>Номер 1: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone1", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 16
        echo "
                    ";
        // line 17
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone2", array())) {
            // line 18
            echo "                        <p><i class=\"fa fa-phone pr-10\"></i>Номер 2: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone2", array()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email", array())) {
            // line 22
            echo "                        <p><i class=\"fa fa-envelope pr-10\"></i>Email: <a href=\"mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email", array()), "html", null, true);
            echo "</a></p>
                    ";
        }
        // line 24
        echo "                </address>
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12\">
                <div class=\"page-footer wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                    <h1>
                        Наша организація
                    </h1>
                    <ul class=\"page-footer-list\">
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Про нас</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Новини</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Проекти</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Публікації</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Галерея</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Партнери</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"/contacts\">Контакти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<!--small footer start -->
<footer class=\"footer-small\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-sm-6 pull-right\">
                <ul class=\"social-link-footer list-unstyled\">
                    ";
        // line 73
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "fb", array())) {
            // line 74
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".1s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "fb", array()), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                    ";
        }
        // line 76
        echo "
                    ";
        // line 77
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "twitter", array())) {
            // line 78
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".2s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "twitter", array()), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "vk", array())) {
            // line 82
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".3s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "vk", array()), "html", null, true);
            echo "\"><i class=\"fa fa-vk\"></i></a></li>
                    ";
        }
        // line 84
        echo "
                    ";
        // line 85
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "gplus", array())) {
            // line 86
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".4s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "gplus", array()), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
                    ";
        }
        // line 88
        echo "
                    ";
        // line 89
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "youtube", array())) {
            // line 90
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".5s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "youtube", array()), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\"></i></a></li>
                    ";
        }
        // line 92
        echo "
                </ul>
            </div>
            <div class=\"col-md-4\">
                <div class=\"copyright\">
                    <p>&copy; Copyright.</p>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 92,  169 => 90,  167 => 89,  164 => 88,  158 => 86,  156 => 85,  153 => 84,  147 => 82,  145 => 81,  142 => 80,  136 => 78,  134 => 77,  131 => 76,  125 => 74,  123 => 73,  72 => 24,  64 => 22,  62 => 21,  59 => 20,  53 => 18,  51 => 17,  48 => 16,  42 => 14,  40 => 13,  37 => 12,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-sm-6 col-xs-12 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">*/
/*                 <h1>*/
/*                     Контакти*/
/*                 </h1>*/
/*                 <address>*/
/*                     {% if contact.address %}*/
/*                         <p><i class="fa fa-home pr-10"></i>Адреса: {{ contact.address }}</p>*/
/*                     {% endif %}*/
/* */
/*                     {% if contact.phone1 %}*/
/*                         <p><i class="fa fa-phone pr-10"></i>Номер 1: {{ contact.phone1 }}</p>*/
/*                     {% endif %}*/
/* */
/*                     {% if contact.phone2 %}*/
/*                         <p><i class="fa fa-phone pr-10"></i>Номер 2: {{ contact.phone2 }}</p>*/
/*                     {% endif %}*/
/* */
/*                     {% if contact.email %}*/
/*                         <p><i class="fa fa-envelope pr-10"></i>Email: <a href="mailto:{{ contact.email }}">{{ contact.email }}</a></p>*/
/*                     {% endif %}*/
/*                 </address>*/
/*             </div>*/
/*             <div class="col-lg-6 col-sm-6 col-xs-12">*/
/*                 <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">*/
/*                     <h1>*/
/*                         Наша организація*/
/*                     </h1>*/
/*                     <ul class="page-footer-list">*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Про нас</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Новини</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Проекти</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Публікації</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Галерея</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Партнери</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="/contacts">Контакти</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <!-- footer end -->*/
/* <!--small footer start -->*/
/* <footer class="footer-small">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-sm-6 pull-right">*/
/*                 <ul class="social-link-footer list-unstyled">*/
/*                     {% if social.fb %}*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="{{ social.fb }}"><i class="fa fa-facebook"></i></a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if social.twitter %}*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="{{ social.twitter }}"><i class="fa fa-twitter"></i></a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if social.vk %}*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="{{ social.vk }}"><i class="fa fa-vk"></i></a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if social.gplus %}*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="{{ social.gplus }}"><i class="fa fa-google-plus"></i></a></li>*/
/*                     {% endif %}*/
/* */
/*                     {% if social.youtube %}*/
/*                         <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="{{ social.youtube }}"><i class="fa fa-youtube"></i></a></li>*/
/*                     {% endif %}*/
/* */
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <div class="copyright">*/
/*                     <p>&copy; Copyright.</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
