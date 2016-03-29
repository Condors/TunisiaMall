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
        $__internal_6ab029eb8955f76a44c8ce1a21b1c12f39f6b58d27287f3be5db19e5233e3336 = $this->env->getExtension("native_profiler");
        $__internal_6ab029eb8955f76a44c8ce1a21b1c12f39f6b58d27287f3be5db19e5233e3336->enter($__internal_6ab029eb8955f76a44c8ce1a21b1c12f39f6b58d27287f3be5db19e5233e3336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ab029eb8955f76a44c8ce1a21b1c12f39f6b58d27287f3be5db19e5233e3336->leave($__internal_6ab029eb8955f76a44c8ce1a21b1c12f39f6b58d27287f3be5db19e5233e3336_prof);

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
