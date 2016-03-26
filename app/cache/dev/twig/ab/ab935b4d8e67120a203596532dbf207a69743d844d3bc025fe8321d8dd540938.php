<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_241299b447638d2c6162215e9c827315e728fcf262a40466cad060c234a0101a extends Twig_Template
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
        $__internal_81433dd6784259534f1a8d00e2460f957f7ee1fadcfe5879f7060e8a789c08c2 = $this->env->getExtension("native_profiler");
        $__internal_81433dd6784259534f1a8d00e2460f957f7ee1fadcfe5879f7060e8a789c08c2->enter($__internal_81433dd6784259534f1a8d00e2460f957f7ee1fadcfe5879f7060e8a789c08c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_81433dd6784259534f1a8d00e2460f957f7ee1fadcfe5879f7060e8a789c08c2->leave($__internal_81433dd6784259534f1a8d00e2460f957f7ee1fadcfe5879f7060e8a789c08c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
