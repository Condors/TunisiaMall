<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2d0d3930732f624c35c85095350d38d01d026fa69282e05ebbbccf4ca7ee7a57 extends Twig_Template
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
        $__internal_98057c82f507707586fb7259635ac43dbf7a4708363340e7a6c4e059001378ac = $this->env->getExtension("native_profiler");
        $__internal_98057c82f507707586fb7259635ac43dbf7a4708363340e7a6c4e059001378ac->enter($__internal_98057c82f507707586fb7259635ac43dbf7a4708363340e7a6c4e059001378ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_98057c82f507707586fb7259635ac43dbf7a4708363340e7a6c4e059001378ac->leave($__internal_98057c82f507707586fb7259635ac43dbf7a4708363340e7a6c4e059001378ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
