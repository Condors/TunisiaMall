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
        $__internal_c936df5f260a0cdab0e051dcbb4b107cc57e5d5e0a9094b0b4b21ae4ab25c9fb = $this->env->getExtension("native_profiler");
        $__internal_c936df5f260a0cdab0e051dcbb4b107cc57e5d5e0a9094b0b4b21ae4ab25c9fb->enter($__internal_c936df5f260a0cdab0e051dcbb4b107cc57e5d5e0a9094b0b4b21ae4ab25c9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c936df5f260a0cdab0e051dcbb4b107cc57e5d5e0a9094b0b4b21ae4ab25c9fb->leave($__internal_c936df5f260a0cdab0e051dcbb4b107cc57e5d5e0a9094b0b4b21ae4ab25c9fb_prof);

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
