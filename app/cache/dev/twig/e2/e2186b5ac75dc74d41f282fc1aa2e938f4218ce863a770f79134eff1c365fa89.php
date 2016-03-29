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
        $__internal_0ef4033146c939788c242ca07b18b3ec1c753729fc5ce3e03a3ce964bf61cc9c = $this->env->getExtension("native_profiler");
        $__internal_0ef4033146c939788c242ca07b18b3ec1c753729fc5ce3e03a3ce964bf61cc9c->enter($__internal_0ef4033146c939788c242ca07b18b3ec1c753729fc5ce3e03a3ce964bf61cc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ef4033146c939788c242ca07b18b3ec1c753729fc5ce3e03a3ce964bf61cc9c->leave($__internal_0ef4033146c939788c242ca07b18b3ec1c753729fc5ce3e03a3ce964bf61cc9c_prof);

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
