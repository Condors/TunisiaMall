<?php

/* CondorsTnMallBundle:Responsable:index.html.twig */
class __TwigTemplate_fede3fd51ffd9069a95c1616af37fffc39df8d05f8d4cd7b4204a3c79bfdacce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "CondorsTnMallBundle:Responsable:index.html.twig", 1);
        $this->blocks = array(
            'quickProfile' => array($this, 'block_quickProfile'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e96cb0930393057b0ab116b6ac47c8c2954ab4b77153dd7dd7fea2f2a20afc7d = $this->env->getExtension("native_profiler");
        $__internal_e96cb0930393057b0ab116b6ac47c8c2954ab4b77153dd7dd7fea2f2a20afc7d->enter($__internal_e96cb0930393057b0ab116b6ac47c8c2954ab4b77153dd7dd7fea2f2a20afc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e96cb0930393057b0ab116b6ac47c8c2954ab4b77153dd7dd7fea2f2a20afc7d->leave($__internal_e96cb0930393057b0ab116b6ac47c8c2954ab4b77153dd7dd7fea2f2a20afc7d_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_f64f0698550d10b6e1990711739accf66ac41a8983a6cd1b6ec044d74250b5c0 = $this->env->getExtension("native_profiler");
        $__internal_f64f0698550d10b6e1990711739accf66ac41a8983a6cd1b6ec044d74250b5c0->enter($__internal_f64f0698550d10b6e1990711739accf66ac41a8983a6cd1b6ec044d74250b5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_f64f0698550d10b6e1990711739accf66ac41a8983a6cd1b6ec044d74250b5c0->leave($__internal_f64f0698550d10b6e1990711739accf66ac41a8983a6cd1b6ec044d74250b5c0_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_91c938f9064185cc065e7b5ee23c645a73027f2e86acde4048b0833f7b18adf9 = $this->env->getExtension("native_profiler");
        $__internal_91c938f9064185cc065e7b5ee23c645a73027f2e86acde4048b0833f7b18adf9->enter($__internal_91c938f9064185cc065e7b5ee23c645a73027f2e86acde4048b0833f7b18adf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_91c938f9064185cc065e7b5ee23c645a73027f2e86acde4048b0833f7b18adf9->leave($__internal_91c938f9064185cc065e7b5ee23c645a73027f2e86acde4048b0833f7b18adf9_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b2d498f497f2174386600cf8f8ae09a679090f23fdad030d8712f134422e8f06 = $this->env->getExtension("native_profiler");
        $__internal_b2d498f497f2174386600cf8f8ae09a679090f23fdad030d8712f134422e8f06->enter($__internal_b2d498f497f2174386600cf8f8ae09a679090f23fdad030d8712f134422e8f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_b2d498f497f2174386600cf8f8ae09a679090f23fdad030d8712f134422e8f06->leave($__internal_b2d498f497f2174386600cf8f8ae09a679090f23fdad030d8712f134422e8f06_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  61 => 12,  58 => 11,  52 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig" %}*/
/* */
/* */
/* {%block quickProfile %}*/
/*     {{ include('CondorsTnMallBundle::Responsable/quickProfile.html.twig') }} */
/* {%endblock quickProfile %}*/
/* */
/* */
/* */
/* {% block nav_menu %}*/
/* */
/* {{ include('CondorsTnMallBundle::Responsable/navMenu.html.twig') }} */
/* */
/* {%endblock nav_menu%}*/
/* */
/* */
/*  {% block footer %}*/
/*   {{ include('CondorsTnMallBundle::Responsable/footer.html.twig') }} */
/* {% endblock footer %}*/
