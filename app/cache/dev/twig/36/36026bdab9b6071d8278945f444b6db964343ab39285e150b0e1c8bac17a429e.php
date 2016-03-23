<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6fe3a675e5949a9c5ac4d9b5f8c4e3504d9c64b77b9c083ab0a4e73472de752d extends Twig_Template
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
        $__internal_57c337da990e5dad66e8b5dc366a1b21c435ba3d67ce0a1785db41acc98fe033 = $this->env->getExtension("native_profiler");
        $__internal_57c337da990e5dad66e8b5dc366a1b21c435ba3d67ce0a1785db41acc98fe033->enter($__internal_57c337da990e5dad66e8b5dc366a1b21c435ba3d67ce0a1785db41acc98fe033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_57c337da990e5dad66e8b5dc366a1b21c435ba3d67ce0a1785db41acc98fe033->leave($__internal_57c337da990e5dad66e8b5dc366a1b21c435ba3d67ce0a1785db41acc98fe033_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
