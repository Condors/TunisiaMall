<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ed63d46fc21bfa10c262692b70ee38fa3fe37ce8c3910df04bc86ee28c32943a extends Twig_Template
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
        $__internal_0e1410a968fd5b2be26dafa8f6073def7d951da5e59db7fddf8c09f0d847d35b = $this->env->getExtension("native_profiler");
        $__internal_0e1410a968fd5b2be26dafa8f6073def7d951da5e59db7fddf8c09f0d847d35b->enter($__internal_0e1410a968fd5b2be26dafa8f6073def7d951da5e59db7fddf8c09f0d847d35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_0e1410a968fd5b2be26dafa8f6073def7d951da5e59db7fddf8c09f0d847d35b->leave($__internal_0e1410a968fd5b2be26dafa8f6073def7d951da5e59db7fddf8c09f0d847d35b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
