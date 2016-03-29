<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f2c96a8f7f6550437ce3fb073dfff70d531adb6ae58026c01e749504a66ee601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e1e7031531916f09acb49736dd8cbe28405b9b86a8d097e5e5ded679487f0f = $this->env->getExtension("native_profiler");
        $__internal_53e1e7031531916f09acb49736dd8cbe28405b9b86a8d097e5e5ded679487f0f->enter($__internal_53e1e7031531916f09acb49736dd8cbe28405b9b86a8d097e5e5ded679487f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_53e1e7031531916f09acb49736dd8cbe28405b9b86a8d097e5e5ded679487f0f->leave($__internal_53e1e7031531916f09acb49736dd8cbe28405b9b86a8d097e5e5ded679487f0f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2a437d817195bedc29293017c2f7da62505ca512dab0d45d302534f07bcbe51 = $this->env->getExtension("native_profiler");
        $__internal_d2a437d817195bedc29293017c2f7da62505ca512dab0d45d302534f07bcbe51->enter($__internal_d2a437d817195bedc29293017c2f7da62505ca512dab0d45d302534f07bcbe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d2a437d817195bedc29293017c2f7da62505ca512dab0d45d302534f07bcbe51->leave($__internal_d2a437d817195bedc29293017c2f7da62505ca512dab0d45d302534f07bcbe51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
