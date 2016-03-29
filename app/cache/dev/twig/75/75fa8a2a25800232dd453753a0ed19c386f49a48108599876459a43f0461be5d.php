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
        $__internal_72d87f26d6f67587fc09f18c66019d2e52ba21aa25acb926757cd5fd713a18da = $this->env->getExtension("native_profiler");
        $__internal_72d87f26d6f67587fc09f18c66019d2e52ba21aa25acb926757cd5fd713a18da->enter($__internal_72d87f26d6f67587fc09f18c66019d2e52ba21aa25acb926757cd5fd713a18da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_72d87f26d6f67587fc09f18c66019d2e52ba21aa25acb926757cd5fd713a18da->leave($__internal_72d87f26d6f67587fc09f18c66019d2e52ba21aa25acb926757cd5fd713a18da_prof);

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
