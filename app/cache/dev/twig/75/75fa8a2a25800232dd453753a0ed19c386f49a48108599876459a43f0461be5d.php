<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fa7f688442813b36cdf3589cc7ab54e680955e8d357727f1a9c023668f8c01d0 extends Twig_Template
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
        $__internal_d2547a6ff92f19e914ad53da41e5332ed84fca8c79d0efa7718313c395c71ca9 = $this->env->getExtension("native_profiler");
        $__internal_d2547a6ff92f19e914ad53da41e5332ed84fca8c79d0efa7718313c395c71ca9->enter($__internal_d2547a6ff92f19e914ad53da41e5332ed84fca8c79d0efa7718313c395c71ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d2547a6ff92f19e914ad53da41e5332ed84fca8c79d0efa7718313c395c71ca9->leave($__internal_d2547a6ff92f19e914ad53da41e5332ed84fca8c79d0efa7718313c395c71ca9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
