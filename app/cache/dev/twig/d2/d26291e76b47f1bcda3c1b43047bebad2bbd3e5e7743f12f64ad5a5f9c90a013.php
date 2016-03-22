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
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34e34729d1a46048d0d9af3cc1ebf11ad5583a96d3265784983d7d243f2b8f9a = $this->env->getExtension("native_profiler");
        $__internal_34e34729d1a46048d0d9af3cc1ebf11ad5583a96d3265784983d7d243f2b8f9a->enter($__internal_34e34729d1a46048d0d9af3cc1ebf11ad5583a96d3265784983d7d243f2b8f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e34729d1a46048d0d9af3cc1ebf11ad5583a96d3265784983d7d243f2b8f9a->leave($__internal_34e34729d1a46048d0d9af3cc1ebf11ad5583a96d3265784983d7d243f2b8f9a_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_3b5e5fdad5eab71d65a45545ee5c1f9b761fc0f662c8dd7bccbe235e3af322b2 = $this->env->getExtension("native_profiler");
        $__internal_3b5e5fdad5eab71d65a45545ee5c1f9b761fc0f662c8dd7bccbe235e3af322b2->enter($__internal_3b5e5fdad5eab71d65a45545ee5c1f9b761fc0f662c8dd7bccbe235e3af322b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_3b5e5fdad5eab71d65a45545ee5c1f9b761fc0f662c8dd7bccbe235e3af322b2->leave($__internal_3b5e5fdad5eab71d65a45545ee5c1f9b761fc0f662c8dd7bccbe235e3af322b2_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_7127597fa800d2ed7beea1bcd9bd218b5a7b0191c0ba1fc7db86fd8e53de67df = $this->env->getExtension("native_profiler");
        $__internal_7127597fa800d2ed7beea1bcd9bd218b5a7b0191c0ba1fc7db86fd8e53de67df->enter($__internal_7127597fa800d2ed7beea1bcd9bd218b5a7b0191c0ba1fc7db86fd8e53de67df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_7127597fa800d2ed7beea1bcd9bd218b5a7b0191c0ba1fc7db86fd8e53de67df->leave($__internal_7127597fa800d2ed7beea1bcd9bd218b5a7b0191c0ba1fc7db86fd8e53de67df_prof);

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
        return array (  60 => 12,  57 => 11,  51 => 10,  41 => 5,  35 => 4,  11 => 1,);
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
