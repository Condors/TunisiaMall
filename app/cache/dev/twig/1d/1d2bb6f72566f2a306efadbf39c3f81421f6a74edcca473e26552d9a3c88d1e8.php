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
        $__internal_3679faf928997f370f3e7e877e97b69442503ed8ceda8da9eb6bc665e1484554 = $this->env->getExtension("native_profiler");
        $__internal_3679faf928997f370f3e7e877e97b69442503ed8ceda8da9eb6bc665e1484554->enter($__internal_3679faf928997f370f3e7e877e97b69442503ed8ceda8da9eb6bc665e1484554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3679faf928997f370f3e7e877e97b69442503ed8ceda8da9eb6bc665e1484554->leave($__internal_3679faf928997f370f3e7e877e97b69442503ed8ceda8da9eb6bc665e1484554_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7b70f77af2708268b13870e62efe677595149a65c2ce80cbf9574dd57ab2c24 = $this->env->getExtension("native_profiler");
        $__internal_e7b70f77af2708268b13870e62efe677595149a65c2ce80cbf9574dd57ab2c24->enter($__internal_e7b70f77af2708268b13870e62efe677595149a65c2ce80cbf9574dd57ab2c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e7b70f77af2708268b13870e62efe677595149a65c2ce80cbf9574dd57ab2c24->leave($__internal_e7b70f77af2708268b13870e62efe677595149a65c2ce80cbf9574dd57ab2c24_prof);

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
