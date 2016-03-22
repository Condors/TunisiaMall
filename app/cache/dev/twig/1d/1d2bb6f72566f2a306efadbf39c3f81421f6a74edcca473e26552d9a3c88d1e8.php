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
        $__internal_404492e5cb2de2e5fa438ac2e03c9138b457533dc53df9e2545ba4456b021c5c = $this->env->getExtension("native_profiler");
        $__internal_404492e5cb2de2e5fa438ac2e03c9138b457533dc53df9e2545ba4456b021c5c->enter($__internal_404492e5cb2de2e5fa438ac2e03c9138b457533dc53df9e2545ba4456b021c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_404492e5cb2de2e5fa438ac2e03c9138b457533dc53df9e2545ba4456b021c5c->leave($__internal_404492e5cb2de2e5fa438ac2e03c9138b457533dc53df9e2545ba4456b021c5c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c786c79ef297a3c8ec3ec251246daa0f5aee317c7f9d5413e23bb1b68c50cfbf = $this->env->getExtension("native_profiler");
        $__internal_c786c79ef297a3c8ec3ec251246daa0f5aee317c7f9d5413e23bb1b68c50cfbf->enter($__internal_c786c79ef297a3c8ec3ec251246daa0f5aee317c7f9d5413e23bb1b68c50cfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c786c79ef297a3c8ec3ec251246daa0f5aee317c7f9d5413e23bb1b68c50cfbf->leave($__internal_c786c79ef297a3c8ec3ec251246daa0f5aee317c7f9d5413e23bb1b68c50cfbf_prof);

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
