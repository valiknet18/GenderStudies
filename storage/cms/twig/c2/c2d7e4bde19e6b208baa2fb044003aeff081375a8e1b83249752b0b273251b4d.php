<?php

/* /var/www/GenderStudies/themes/site/layouts/layout.htm */
class __TwigTemplate_0b8979be3d4bc1edaa3a65b06229973a5ac9ed4af795851436a99cddae3a8896 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Developed By M Abdur Rokib Promy\">
    <meta name=\"author\" content=\"cosmic\">
    <meta name=\"keywords\" content=\"Bootstrap 3, Template, Theme, Responsive, Corporate, Business\">

    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>
        Главная
    </title>

    <link href=\"/styles/css/superfish.css\" rel=\"stylesheet\" media=\"screen\">

    ";
        // line 18
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 19
        echo "
</head>

<body>
<div class=\"language\">
    <a href=\"#\" title=\"UA\" class=\"language-flag\"><img  src=\"img/ua.png\" alt=\"\" width=\"18\" height=\"12\"></a>
    <a href=\"#\" title=\"RU\" class=\"language-flag\"><img  src=\"img/ru.png\" alt=\"\" width=\"18\" height=\"12\"></a>
    <span class=\"language-text\">Язык</span>
</div>
<!--header start-->
";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "<!--header end-->

";
        // line 32
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 33
        echo "
";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
<!-- js placed at the end of the document so the pages load faster
<script src=\"js/jquery.js\">
</script>
-->
<script type=\"text/javascript\" src=\"js/jquery-1.8.3.min.js\"></script>

<script src=\"js/jquery-1.8.3.min.js\"></script>
<script src=\"js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"js/hover-dropdown.js\"></script>
<script defer src=\"js/jquery.flexslider.js\"></script>
<script type=\"text/javascript\" src=\"assets/bxslider/jquery.bxslider.js\"></script>

<script type=\"text/javascript\" src=\"js/jquery.parallax-1.1.3.js\"></script>
<script src=\"js/wow.min.js\"></script>
<script src=\"assets/owlcarousel/owl.carousel.js\"></script>

<script src=\"js/jquery.easing.min.js\"></script>
<script src=\"js/link-hover.js\"></script>
<script src=\"js/superfish.js\"></script>
<script type=\"text/javascript\" src=\"js/parallax-slider/jquery.cslider.js\"></script>

<!--common script for all pages-->
<script src=\"js/common-scripts.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/layouts/layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  66 => 34,  63 => 33,  61 => 32,  57 => 30,  53 => 29,  41 => 19,  38 => 18,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="Developed By M Abdur Rokib Promy">*/
/*     <meta name="author" content="cosmic">*/
/*     <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">*/
/* */
/*     <link rel="shortcut icon" href="img/favicon.png">*/
/* */
/*     <title>*/
/*         Главная*/
/*     </title>*/
/* */
/*     <link href="/styles/css/superfish.css" rel="stylesheet" media="screen">*/
/* */
/*     {% styles %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* <div class="language">*/
/*     <a href="#" title="UA" class="language-flag"><img  src="img/ua.png" alt="" width="18" height="12"></a>*/
/*     <a href="#" title="RU" class="language-flag"><img  src="img/ru.png" alt="" width="18" height="12"></a>*/
/*     <span class="language-text">Язык</span>*/
/* </div>*/
/* <!--header start-->*/
/* {% partial 'header' %}*/
/* <!--header end-->*/
/* */
/* {% page %}*/
/* */
/* {% partial 'footer' %}*/
/* */
/* <!-- js placed at the end of the document so the pages load faster*/
/* <script src="js/jquery.js">*/
/* </script>*/
/* -->*/
/* <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>*/
/* */
/* <script src="js/jquery-1.8.3.min.js"></script>*/
/* <script src="js/bootstrap.min.js"></script>*/
/* <script type="text/javascript" src="js/hover-dropdown.js"></script>*/
/* <script defer src="js/jquery.flexslider.js"></script>*/
/* <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>*/
/* */
/* <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>*/
/* <script src="js/wow.min.js"></script>*/
/* <script src="assets/owlcarousel/owl.carousel.js"></script>*/
/* */
/* <script src="js/jquery.easing.min.js"></script>*/
/* <script src="js/link-hover.js"></script>*/
/* <script src="js/superfish.js"></script>*/
/* <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js"></script>*/
/* */
/* <!--common script for all pages-->*/
/* <script src="js/common-scripts.js"></script>*/
/* */
/* </body>*/
/* </html>*/
