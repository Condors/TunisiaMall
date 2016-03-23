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
        $__internal_11bf6f9625def647378bb50bc13f10a606d156b9503df342a4ae9bee30a19d12 = $this->env->getExtension("native_profiler");
        $__internal_11bf6f9625def647378bb50bc13f10a606d156b9503df342a4ae9bee30a19d12->enter($__internal_11bf6f9625def647378bb50bc13f10a606d156b9503df342a4ae9bee30a19d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_11bf6f9625def647378bb50bc13f10a606d156b9503df342a4ae9bee30a19d12->leave($__internal_11bf6f9625def647378bb50bc13f10a606d156b9503df342a4ae9bee30a19d12_prof);

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
