<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_569480973b2680e851fcf744338cd82fa7d662d95e5d4be1195cdee392dc2581 extends Twig_Template
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
        $__internal_0679fb32ea0fa582a2c85dccb72a2a18dd86d889da4eb7e3bb96cdc216168b5b = $this->env->getExtension("native_profiler");
        $__internal_0679fb32ea0fa582a2c85dccb72a2a18dd86d889da4eb7e3bb96cdc216168b5b->enter($__internal_0679fb32ea0fa582a2c85dccb72a2a18dd86d889da4eb7e3bb96cdc216168b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0679fb32ea0fa582a2c85dccb72a2a18dd86d889da4eb7e3bb96cdc216168b5b->leave($__internal_0679fb32ea0fa582a2c85dccb72a2a18dd86d889da4eb7e3bb96cdc216168b5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
