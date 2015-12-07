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

    ";
        // line 16
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 17
        echo "
</head>

<body>

";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "
";
        // line 24
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 25
        echo "
";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "
<!-- Cкрипты -->

<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false\">
</script>
";
        // line 32
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 33
        echo "
<script>

    wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       0          // default
            }
    )
    wow.init();


    \$(window).load(function() {
                \$('.flexslider').flexslider({
                            animation: \"slide\",
                            start: function(slider) {
                                \$('body').removeClass('loading');
                            }
                        }
                );
            }
    );




    \$(window).scroll(function() {
                \$('#skillz').each(function(){
                            var imagePos = \$(this).offset().top;
                            var viewportheight = window.innerHeight;

                            var topOfWindow = \$(window).scrollTop();
                            if (imagePos < topOfWindow+viewportheight) {
                                \$('.skill_bar').fadeIn('slow');
                                \$('.skill_one').animate({
                                            width:'60%'}
                                        , 2000);
                                \$('.skill_two').animate({
                                            width:'90%'}
                                        , 2000);
                                \$('.skill_three').animate({
                                            width:'70%'}
                                        , 1000);
                                \$('.skill_four').animate({
                                            width:'55%'}
                                        , 1000);
                                \$('.skill_bar_progress p').fadeIn('slow',function(){

                                        }
                                );
                            }
                        }
                );
            }
    );




</script>
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
        return array (  72 => 33,  69 => 32,  62 => 27,  58 => 26,  55 => 25,  53 => 24,  50 => 23,  46 => 22,  39 => 17,  36 => 16,  19 => 1,);
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
/*     {% styles %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {% partial 'header' %}*/
/* */
/* {% page %}*/
/* */
/* {% partial 'footer' %}*/
/* */
/* <!-- Cкрипты -->*/
/* */
/* <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false">*/
/* </script>*/
/* {% scripts %}*/
/* */
/* <script>*/
/* */
/*     wow = new WOW(*/
/*             {*/
/*                 boxClass:     'wow',      // default*/
/*                 animateClass: 'animated', // default*/
/*                 offset:       0          // default*/
/*             }*/
/*     )*/
/*     wow.init();*/
/* */
/* */
/*     $(window).load(function() {*/
/*                 $('.flexslider').flexslider({*/
/*                             animation: "slide",*/
/*                             start: function(slider) {*/
/*                                 $('body').removeClass('loading');*/
/*                             }*/
/*                         }*/
/*                 );*/
/*             }*/
/*     );*/
/* */
/* */
/* */
/* */
/*     $(window).scroll(function() {*/
/*                 $('#skillz').each(function(){*/
/*                             var imagePos = $(this).offset().top;*/
/*                             var viewportheight = window.innerHeight;*/
/* */
/*                             var topOfWindow = $(window).scrollTop();*/
/*                             if (imagePos < topOfWindow+viewportheight) {*/
/*                                 $('.skill_bar').fadeIn('slow');*/
/*                                 $('.skill_one').animate({*/
/*                                             width:'60%'}*/
/*                                         , 2000);*/
/*                                 $('.skill_two').animate({*/
/*                                             width:'90%'}*/
/*                                         , 2000);*/
/*                                 $('.skill_three').animate({*/
/*                                             width:'70%'}*/
/*                                         , 1000);*/
/*                                 $('.skill_four').animate({*/
/*                                             width:'55%'}*/
/*                                         , 1000);*/
/*                                 $('.skill_bar_progress p').fadeIn('slow',function(){*/
/* */
/*                                         }*/
/*                                 );*/
/*                             }*/
/*                         }*/
/*                 );*/
/*             }*/
/*     );*/
/* */
/* */
/* */
/* */
/* </script>*/
/* </body>*/
/* </html>*/
