<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2117832afe77bae82f049c4eb8e5932684525bdcce456014b54e21cdbbf0c68f extends Twig_Template
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
        $__internal_5ee8f67afe08f9f6fdd309aaa762500b5faefdf3167b68498c5d87c972d7ec64 = $this->env->getExtension("native_profiler");
        $__internal_5ee8f67afe08f9f6fdd309aaa762500b5faefdf3167b68498c5d87c972d7ec64->enter($__internal_5ee8f67afe08f9f6fdd309aaa762500b5faefdf3167b68498c5d87c972d7ec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5ee8f67afe08f9f6fdd309aaa762500b5faefdf3167b68498c5d87c972d7ec64->leave($__internal_5ee8f67afe08f9f6fdd309aaa762500b5faefdf3167b68498c5d87c972d7ec64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
