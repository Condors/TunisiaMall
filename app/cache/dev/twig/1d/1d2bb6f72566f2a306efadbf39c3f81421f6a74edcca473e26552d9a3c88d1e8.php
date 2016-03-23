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
        $__internal_1a9cddf3832241f983c923503baf05113a162d64ad0c53f2c199f1eb681c58f3 = $this->env->getExtension("native_profiler");
        $__internal_1a9cddf3832241f983c923503baf05113a162d64ad0c53f2c199f1eb681c58f3->enter($__internal_1a9cddf3832241f983c923503baf05113a162d64ad0c53f2c199f1eb681c58f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a9cddf3832241f983c923503baf05113a162d64ad0c53f2c199f1eb681c58f3->leave($__internal_1a9cddf3832241f983c923503baf05113a162d64ad0c53f2c199f1eb681c58f3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_16173f0916bfb09732aae287d2ee4a1c4a1c28fdebc3c46bf29f44f887079298 = $this->env->getExtension("native_profiler");
        $__internal_16173f0916bfb09732aae287d2ee4a1c4a1c28fdebc3c46bf29f44f887079298->enter($__internal_16173f0916bfb09732aae287d2ee4a1c4a1c28fdebc3c46bf29f44f887079298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_16173f0916bfb09732aae287d2ee4a1c4a1c28fdebc3c46bf29f44f887079298->leave($__internal_16173f0916bfb09732aae287d2ee4a1c4a1c28fdebc3c46bf29f44f887079298_prof);

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
