<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_129080edee6d56151cc4a865c4303f6eab60cc029306faf4024dcb233e46acf4 extends Twig_Template
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
        $__internal_888add25c12b7818c0e4988690037339f126ee260c4be2ff2945228cdd68aa99 = $this->env->getExtension("native_profiler");
        $__internal_888add25c12b7818c0e4988690037339f126ee260c4be2ff2945228cdd68aa99->enter($__internal_888add25c12b7818c0e4988690037339f126ee260c4be2ff2945228cdd68aa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_888add25c12b7818c0e4988690037339f126ee260c4be2ff2945228cdd68aa99->leave($__internal_888add25c12b7818c0e4988690037339f126ee260c4be2ff2945228cdd68aa99_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */