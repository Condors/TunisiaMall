<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ebd34c1b3744c096debc78bae1cbade080a54075198c6f667b2db082ae47952e extends Twig_Template
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
        $__internal_6aa2811b786eaa65decc42653db667081aefa5fd4d0b92a0b7b7ab04e5988476 = $this->env->getExtension("native_profiler");
        $__internal_6aa2811b786eaa65decc42653db667081aefa5fd4d0b92a0b7b7ab04e5988476->enter($__internal_6aa2811b786eaa65decc42653db667081aefa5fd4d0b92a0b7b7ab04e5988476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6aa2811b786eaa65decc42653db667081aefa5fd4d0b92a0b7b7ab04e5988476->leave($__internal_6aa2811b786eaa65decc42653db667081aefa5fd4d0b92a0b7b7ab04e5988476_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
