<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_49616493b923befb068345f75134659a05bf1c5b7f96fc65fbf8e4f8ba645f5c extends Twig_Template
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
        $__internal_1ebb2bd9467e1637fe08a9600f3e4259a2987c1fb544076a3b0c47fd327f00d8 = $this->env->getExtension("native_profiler");
        $__internal_1ebb2bd9467e1637fe08a9600f3e4259a2987c1fb544076a3b0c47fd327f00d8->enter($__internal_1ebb2bd9467e1637fe08a9600f3e4259a2987c1fb544076a3b0c47fd327f00d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1ebb2bd9467e1637fe08a9600f3e4259a2987c1fb544076a3b0c47fd327f00d8->leave($__internal_1ebb2bd9467e1637fe08a9600f3e4259a2987c1fb544076a3b0c47fd327f00d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
