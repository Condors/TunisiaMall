<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ed378befee5fa94bb351dab5a08e9020c5f6f03bada63e00f87683a67b163872 extends Twig_Template
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
        $__internal_98dfcbde14c0934c2435b4b29bdc0494707acc2d50ceec0c078f5281ecbdeeca = $this->env->getExtension("native_profiler");
        $__internal_98dfcbde14c0934c2435b4b29bdc0494707acc2d50ceec0c078f5281ecbdeeca->enter($__internal_98dfcbde14c0934c2435b4b29bdc0494707acc2d50ceec0c078f5281ecbdeeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_98dfcbde14c0934c2435b4b29bdc0494707acc2d50ceec0c078f5281ecbdeeca->leave($__internal_98dfcbde14c0934c2435b4b29bdc0494707acc2d50ceec0c078f5281ecbdeeca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
