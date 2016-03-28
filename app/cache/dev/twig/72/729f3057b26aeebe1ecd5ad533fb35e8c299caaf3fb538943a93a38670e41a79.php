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
        $__internal_a1bca8f1a73a6ad34f553b1e921048d8e3a1205fd65f023a3f09aecdc1671ad9 = $this->env->getExtension("native_profiler");
        $__internal_a1bca8f1a73a6ad34f553b1e921048d8e3a1205fd65f023a3f09aecdc1671ad9->enter($__internal_a1bca8f1a73a6ad34f553b1e921048d8e3a1205fd65f023a3f09aecdc1671ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a1bca8f1a73a6ad34f553b1e921048d8e3a1205fd65f023a3f09aecdc1671ad9->leave($__internal_a1bca8f1a73a6ad34f553b1e921048d8e3a1205fd65f023a3f09aecdc1671ad9_prof);

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
