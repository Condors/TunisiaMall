<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5affaaaa7b4a3262bbc8656b7d166a74066f47bd24e462220fd788b104173d2e extends Twig_Template
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
        $__internal_6cb3b2d1f07424db7866271325c86fd6ceda61acfa850c6303272638b85cfe3c = $this->env->getExtension("native_profiler");
        $__internal_6cb3b2d1f07424db7866271325c86fd6ceda61acfa850c6303272638b85cfe3c->enter($__internal_6cb3b2d1f07424db7866271325c86fd6ceda61acfa850c6303272638b85cfe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6cb3b2d1f07424db7866271325c86fd6ceda61acfa850c6303272638b85cfe3c->leave($__internal_6cb3b2d1f07424db7866271325c86fd6ceda61acfa850c6303272638b85cfe3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
