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
        $__internal_7c7b2f8a1b13b0c6e65dac31d83243eb7e10141d5fa02750da0bf5bf07500075 = $this->env->getExtension("native_profiler");
        $__internal_7c7b2f8a1b13b0c6e65dac31d83243eb7e10141d5fa02750da0bf5bf07500075->enter($__internal_7c7b2f8a1b13b0c6e65dac31d83243eb7e10141d5fa02750da0bf5bf07500075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7c7b2f8a1b13b0c6e65dac31d83243eb7e10141d5fa02750da0bf5bf07500075->leave($__internal_7c7b2f8a1b13b0c6e65dac31d83243eb7e10141d5fa02750da0bf5bf07500075_prof);

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