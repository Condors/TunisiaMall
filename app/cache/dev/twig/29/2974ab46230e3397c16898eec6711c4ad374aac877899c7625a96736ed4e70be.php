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
        $__internal_c1fa880decf9734edc9c5adb8978a37a44228f2276c1fb4164a27ff792347422 = $this->env->getExtension("native_profiler");
        $__internal_c1fa880decf9734edc9c5adb8978a37a44228f2276c1fb4164a27ff792347422->enter($__internal_c1fa880decf9734edc9c5adb8978a37a44228f2276c1fb4164a27ff792347422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c1fa880decf9734edc9c5adb8978a37a44228f2276c1fb4164a27ff792347422->leave($__internal_c1fa880decf9734edc9c5adb8978a37a44228f2276c1fb4164a27ff792347422_prof);

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
