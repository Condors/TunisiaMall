<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ebdc24022bcb15f1727abf096857d97e9be985dde47d4996c06c4f4a05b6f723 extends Twig_Template
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
        $__internal_ea05a13f563821758a0bf2e7c1195e57994fd0a756bc175dd79b102aecf325c8 = $this->env->getExtension("native_profiler");
        $__internal_ea05a13f563821758a0bf2e7c1195e57994fd0a756bc175dd79b102aecf325c8->enter($__internal_ea05a13f563821758a0bf2e7c1195e57994fd0a756bc175dd79b102aecf325c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ea05a13f563821758a0bf2e7c1195e57994fd0a756bc175dd79b102aecf325c8->leave($__internal_ea05a13f563821758a0bf2e7c1195e57994fd0a756bc175dd79b102aecf325c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
