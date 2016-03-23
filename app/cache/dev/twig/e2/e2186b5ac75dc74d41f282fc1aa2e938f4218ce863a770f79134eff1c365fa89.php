<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b9700af74d119fa648d4004c18608dceb86e8fde0ff698f2db32efb1bdd7db04 extends Twig_Template
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
        $__internal_a032c5a8c06914f41a7caa3ac98190a78163839f6d7f7aa0cba97bb7b279e621 = $this->env->getExtension("native_profiler");
        $__internal_a032c5a8c06914f41a7caa3ac98190a78163839f6d7f7aa0cba97bb7b279e621->enter($__internal_a032c5a8c06914f41a7caa3ac98190a78163839f6d7f7aa0cba97bb7b279e621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a032c5a8c06914f41a7caa3ac98190a78163839f6d7f7aa0cba97bb7b279e621->leave($__internal_a032c5a8c06914f41a7caa3ac98190a78163839f6d7f7aa0cba97bb7b279e621_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
