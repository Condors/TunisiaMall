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
        $__internal_2f1114b74c1ce373c7a0455151a96c7296aa2dd311dd6d572f21caf13b0923db = $this->env->getExtension("native_profiler");
        $__internal_2f1114b74c1ce373c7a0455151a96c7296aa2dd311dd6d572f21caf13b0923db->enter($__internal_2f1114b74c1ce373c7a0455151a96c7296aa2dd311dd6d572f21caf13b0923db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2f1114b74c1ce373c7a0455151a96c7296aa2dd311dd6d572f21caf13b0923db->leave($__internal_2f1114b74c1ce373c7a0455151a96c7296aa2dd311dd6d572f21caf13b0923db_prof);

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
