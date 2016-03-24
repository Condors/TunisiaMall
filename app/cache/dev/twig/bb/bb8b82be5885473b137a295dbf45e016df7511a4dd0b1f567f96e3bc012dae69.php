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
        $__internal_d9e21de0bcf26838760a8fa9e418724e04020d95e36fe20cf8ef1ed8d258141f = $this->env->getExtension("native_profiler");
        $__internal_d9e21de0bcf26838760a8fa9e418724e04020d95e36fe20cf8ef1ed8d258141f->enter($__internal_d9e21de0bcf26838760a8fa9e418724e04020d95e36fe20cf8ef1ed8d258141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d9e21de0bcf26838760a8fa9e418724e04020d95e36fe20cf8ef1ed8d258141f->leave($__internal_d9e21de0bcf26838760a8fa9e418724e04020d95e36fe20cf8ef1ed8d258141f_prof);

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
