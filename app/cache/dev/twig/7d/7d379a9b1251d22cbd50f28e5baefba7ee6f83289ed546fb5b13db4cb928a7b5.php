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
        $__internal_4b28ee26e37e06f429ebbd74babead397fc9553e7f170c9fb9d46356197b9e5a = $this->env->getExtension("native_profiler");
        $__internal_4b28ee26e37e06f429ebbd74babead397fc9553e7f170c9fb9d46356197b9e5a->enter($__internal_4b28ee26e37e06f429ebbd74babead397fc9553e7f170c9fb9d46356197b9e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_4b28ee26e37e06f429ebbd74babead397fc9553e7f170c9fb9d46356197b9e5a->leave($__internal_4b28ee26e37e06f429ebbd74babead397fc9553e7f170c9fb9d46356197b9e5a_prof);

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
