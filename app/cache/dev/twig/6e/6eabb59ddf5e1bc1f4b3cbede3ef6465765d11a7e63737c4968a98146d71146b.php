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
        $__internal_fd171b747f87c667da37fb5e999ec6ce5aefb4bcb50af1f156fb42201e7834b7 = $this->env->getExtension("native_profiler");
        $__internal_fd171b747f87c667da37fb5e999ec6ce5aefb4bcb50af1f156fb42201e7834b7->enter($__internal_fd171b747f87c667da37fb5e999ec6ce5aefb4bcb50af1f156fb42201e7834b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fd171b747f87c667da37fb5e999ec6ce5aefb4bcb50af1f156fb42201e7834b7->leave($__internal_fd171b747f87c667da37fb5e999ec6ce5aefb4bcb50af1f156fb42201e7834b7_prof);

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
