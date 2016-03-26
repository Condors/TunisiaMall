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
        $__internal_a634cb9e461c8632c47a3db612c3aa0d3d96e80d49919c031e0f8e4e862fef46 = $this->env->getExtension("native_profiler");
        $__internal_a634cb9e461c8632c47a3db612c3aa0d3d96e80d49919c031e0f8e4e862fef46->enter($__internal_a634cb9e461c8632c47a3db612c3aa0d3d96e80d49919c031e0f8e4e862fef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a634cb9e461c8632c47a3db612c3aa0d3d96e80d49919c031e0f8e4e862fef46->leave($__internal_a634cb9e461c8632c47a3db612c3aa0d3d96e80d49919c031e0f8e4e862fef46_prof);

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
