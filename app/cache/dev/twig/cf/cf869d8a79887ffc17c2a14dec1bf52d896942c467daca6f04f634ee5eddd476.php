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
        $__internal_db9024262b5f1f1a068d12f0687a2b9d87ad1dbbbf3f5fc4b788ef768bfce32d = $this->env->getExtension("native_profiler");
        $__internal_db9024262b5f1f1a068d12f0687a2b9d87ad1dbbbf3f5fc4b788ef768bfce32d->enter($__internal_db9024262b5f1f1a068d12f0687a2b9d87ad1dbbbf3f5fc4b788ef768bfce32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_db9024262b5f1f1a068d12f0687a2b9d87ad1dbbbf3f5fc4b788ef768bfce32d->leave($__internal_db9024262b5f1f1a068d12f0687a2b9d87ad1dbbbf3f5fc4b788ef768bfce32d_prof);

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
