<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b259d98a485ea0c22f65f09d7bd3ccc2523b3e171c87e1e053f32464e22e742f extends Twig_Template
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
        $__internal_d97878daeedb6728a7cedb2b5b74ccd6d234ff764cb873c47eb865a52903314e = $this->env->getExtension("native_profiler");
        $__internal_d97878daeedb6728a7cedb2b5b74ccd6d234ff764cb873c47eb865a52903314e->enter($__internal_d97878daeedb6728a7cedb2b5b74ccd6d234ff764cb873c47eb865a52903314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d97878daeedb6728a7cedb2b5b74ccd6d234ff764cb873c47eb865a52903314e->leave($__internal_d97878daeedb6728a7cedb2b5b74ccd6d234ff764cb873c47eb865a52903314e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
