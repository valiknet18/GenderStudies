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
                    Контакты
                </h1>
                <address>
                    <p><i class=\"fa fa-home pr-10\"></i>Адрес: No.XXXXXX street</p>
                    <p><i class=\"fa fa-phone pr-10\"></i>Номер 1 : (123) 456-7890 </p>
                    <p><i class=\"fa fa-phone pr-10\"></i>Номер 2 : (123) 456-7890 </p>
                    <p><i class=\"fa fa-envelope pr-10\"></i>Email :   <a href=\"javascript:;\">support@example.com</a></p>
                </address>
            </div>
            <div class=\"col-lg-6 col-sm-6 col-xs-12\">
                <div class=\"page-footer wow fadeInUp\" data-wow-duration=\"2s\" data-wow-delay=\".5s\">
                    <h1>
                        Наша организация
                    </h1>
                    <ul class=\"page-footer-list\">
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Про нас</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Ссылка</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Ссылка</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Ссылка</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Ссылка</a>
                        </li>
                        <li>
                            <i class=\"fa fa-angle-right\"></i>
                            <a href=\"#\">Ссылка</a>
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
        // line 58
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "fb", array())) {
            // line 59
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".1s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "fb", array()), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                    ";
        }
        // line 61
        echo "
                    ";
        // line 62
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "twitter", array())) {
            // line 63
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".2s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "twitter", array()), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                    ";
        }
        // line 65
        echo "
                    ";
        // line 66
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "vk", array())) {
            // line 67
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".3s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "vk", array()), "html", null, true);
            echo "\"><i class=\"fa fa-vk\"></i></a></li>
                    ";
        }
        // line 69
        echo "
                    ";
        // line 70
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "gplus", array())) {
            // line 71
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".4s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "gplus", array()), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
                    ";
        }
        // line 73
        echo "
                    ";
        // line 74
        if ($this->getAttribute((isset($context["social"]) ? $context["social"] : null), "youtube", array())) {
            // line 75
            echo "                        <li class=\"wow flipInX\" data-wow-duration=\"2s\" data-wow-delay=\".5s\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["social"]) ? $context["social"] : null), "youtube", array()), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\"></i></a></li>
                    ";
        }
        // line 77
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
        return array (  130 => 77,  124 => 75,  122 => 74,  119 => 73,  113 => 71,  111 => 70,  108 => 69,  102 => 67,  100 => 66,  97 => 65,  91 => 63,  89 => 62,  86 => 61,  80 => 59,  78 => 58,  19 => 1,);
    }
}
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-6 col-sm-6 col-xs-12 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">*/
/*                 <h1>*/
/*                     Контакты*/
/*                 </h1>*/
/*                 <address>*/
/*                     <p><i class="fa fa-home pr-10"></i>Адрес: No.XXXXXX street</p>*/
/*                     <p><i class="fa fa-phone pr-10"></i>Номер 1 : (123) 456-7890 </p>*/
/*                     <p><i class="fa fa-phone pr-10"></i>Номер 2 : (123) 456-7890 </p>*/
/*                     <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">support@example.com</a></p>*/
/*                 </address>*/
/*             </div>*/
/*             <div class="col-lg-6 col-sm-6 col-xs-12">*/
/*                 <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">*/
/*                     <h1>*/
/*                         Наша организация*/
/*                     </h1>*/
/*                     <ul class="page-footer-list">*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Про нас</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Ссылка</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Ссылка</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Ссылка</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Ссылка</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <i class="fa fa-angle-right"></i>*/
/*                             <a href="#">Ссылка</a>*/
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
