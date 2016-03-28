<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2e7736523282433cc89be2536e55953eb71616f8bc1bd7a595686f190f60b530 extends Twig_Template
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
        $__internal_1b92f6c692f8281a3c9f706a31efe9f91bb3e402fc655eb26711d0654276ddf4 = $this->env->getExtension("native_profiler");
        $__internal_1b92f6c692f8281a3c9f706a31efe9f91bb3e402fc655eb26711d0654276ddf4->enter($__internal_1b92f6c692f8281a3c9f706a31efe9f91bb3e402fc655eb26711d0654276ddf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_1b92f6c692f8281a3c9f706a31efe9f91bb3e402fc655eb26711d0654276ddf4->leave($__internal_1b92f6c692f8281a3c9f706a31efe9f91bb3e402fc655eb26711d0654276ddf4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
