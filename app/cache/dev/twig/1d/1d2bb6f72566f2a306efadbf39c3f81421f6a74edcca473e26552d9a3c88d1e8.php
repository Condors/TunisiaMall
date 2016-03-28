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
        $__internal_8758cb769d8ca98b1bfdc33b66795505229667cfd0217bc8627dc03127ca51e3 = $this->env->getExtension("native_profiler");
        $__internal_8758cb769d8ca98b1bfdc33b66795505229667cfd0217bc8627dc03127ca51e3->enter($__internal_8758cb769d8ca98b1bfdc33b66795505229667cfd0217bc8627dc03127ca51e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8758cb769d8ca98b1bfdc33b66795505229667cfd0217bc8627dc03127ca51e3->leave($__internal_8758cb769d8ca98b1bfdc33b66795505229667cfd0217bc8627dc03127ca51e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2af25766326fa1e62ec8fa380150626da3df794647b896343b807b90272d5053 = $this->env->getExtension("native_profiler");
        $__internal_2af25766326fa1e62ec8fa380150626da3df794647b896343b807b90272d5053->enter($__internal_2af25766326fa1e62ec8fa380150626da3df794647b896343b807b90272d5053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2af25766326fa1e62ec8fa380150626da3df794647b896343b807b90272d5053->leave($__internal_2af25766326fa1e62ec8fa380150626da3df794647b896343b807b90272d5053_prof);

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
