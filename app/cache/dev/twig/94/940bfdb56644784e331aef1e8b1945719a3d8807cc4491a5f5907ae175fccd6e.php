<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5e8052152ae49c50af6d6de5ffa4c4cc6fd0d87abb98d1b7e9ce536759dddaee extends Twig_Template
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
        $__internal_97f7e15998bd113d904dceaae68c059ebaca70607672f5fa7b4abcaa3423ba1f = $this->env->getExtension("native_profiler");
        $__internal_97f7e15998bd113d904dceaae68c059ebaca70607672f5fa7b4abcaa3423ba1f->enter($__internal_97f7e15998bd113d904dceaae68c059ebaca70607672f5fa7b4abcaa3423ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_97f7e15998bd113d904dceaae68c059ebaca70607672f5fa7b4abcaa3423ba1f->leave($__internal_97f7e15998bd113d904dceaae68c059ebaca70607672f5fa7b4abcaa3423ba1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
