<?php

/* /var/www/GenderStudies/themes/site/layouts/fallback */
class __TwigTemplate_4f61249db0f5e193e7e858c53cf8b0a03b86605739b7d804d2cfdcf35c44f447 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/var/www/GenderStudies/themes/site/layouts/fallback";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% page %}*/
