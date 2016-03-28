<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f45a051fcbe95b2cfd1a61384c7710a9ccdea948c9c1da531d6f44d94bd0283c extends Twig_Template
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
        $__internal_e59b5fd868930ac388740388f258b07f7670feea741edb4d6b9a74e90d5df724 = $this->env->getExtension("native_profiler");
        $__internal_e59b5fd868930ac388740388f258b07f7670feea741edb4d6b9a74e90d5df724->enter($__internal_e59b5fd868930ac388740388f258b07f7670feea741edb4d6b9a74e90d5df724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e59b5fd868930ac388740388f258b07f7670feea741edb4d6b9a74e90d5df724->leave($__internal_e59b5fd868930ac388740388f258b07f7670feea741edb4d6b9a74e90d5df724_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
