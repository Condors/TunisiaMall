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
        $__internal_f8d1b6d54b3403c3cffb4077789639089c209b576aeeaa91ea4a438852697934 = $this->env->getExtension("native_profiler");
        $__internal_f8d1b6d54b3403c3cffb4077789639089c209b576aeeaa91ea4a438852697934->enter($__internal_f8d1b6d54b3403c3cffb4077789639089c209b576aeeaa91ea4a438852697934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f8d1b6d54b3403c3cffb4077789639089c209b576aeeaa91ea4a438852697934->leave($__internal_f8d1b6d54b3403c3cffb4077789639089c209b576aeeaa91ea4a438852697934_prof);

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
