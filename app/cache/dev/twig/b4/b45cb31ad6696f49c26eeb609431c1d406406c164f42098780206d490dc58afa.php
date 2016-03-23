<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_afdf011ca652f8a4e72e377eca73ba20bfc9456bfeac8f163dc032264c0d2c63 extends Twig_Template
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
        $__internal_2205622d2c92ed3554a920a4aa57a8b5ea11aec390bd20ef16283fac0eccf08e = $this->env->getExtension("native_profiler");
        $__internal_2205622d2c92ed3554a920a4aa57a8b5ea11aec390bd20ef16283fac0eccf08e->enter($__internal_2205622d2c92ed3554a920a4aa57a8b5ea11aec390bd20ef16283fac0eccf08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2205622d2c92ed3554a920a4aa57a8b5ea11aec390bd20ef16283fac0eccf08e->leave($__internal_2205622d2c92ed3554a920a4aa57a8b5ea11aec390bd20ef16283fac0eccf08e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
