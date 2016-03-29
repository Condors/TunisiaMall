<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c02da25fe99d0bf1a32b3bff1ac93ed27ea97a442f10c3c2f8859fea024e7dd1 extends Twig_Template
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
        $__internal_88705c0cafce02b58bf133265fdd6570137c70e85d14303e0b4ba8cfab28e420 = $this->env->getExtension("native_profiler");
        $__internal_88705c0cafce02b58bf133265fdd6570137c70e85d14303e0b4ba8cfab28e420->enter($__internal_88705c0cafce02b58bf133265fdd6570137c70e85d14303e0b4ba8cfab28e420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_88705c0cafce02b58bf133265fdd6570137c70e85d14303e0b4ba8cfab28e420->leave($__internal_88705c0cafce02b58bf133265fdd6570137c70e85d14303e0b4ba8cfab28e420_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
