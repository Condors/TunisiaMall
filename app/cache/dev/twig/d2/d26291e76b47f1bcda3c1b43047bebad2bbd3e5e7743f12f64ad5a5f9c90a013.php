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
        $__internal_220d1545d2e7202b649fbbc64103c0c8dd10311f3f67e49905f299888ef84ed4 = $this->env->getExtension("native_profiler");
        $__internal_220d1545d2e7202b649fbbc64103c0c8dd10311f3f67e49905f299888ef84ed4->enter($__internal_220d1545d2e7202b649fbbc64103c0c8dd10311f3f67e49905f299888ef84ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_220d1545d2e7202b649fbbc64103c0c8dd10311f3f67e49905f299888ef84ed4->leave($__internal_220d1545d2e7202b649fbbc64103c0c8dd10311f3f67e49905f299888ef84ed4_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_6e7e253792a86b3d912064d0863ce65cd90f3fd0d4bf0a5ad715cc3a293c970f = $this->env->getExtension("native_profiler");
        $__internal_6e7e253792a86b3d912064d0863ce65cd90f3fd0d4bf0a5ad715cc3a293c970f->enter($__internal_6e7e253792a86b3d912064d0863ce65cd90f3fd0d4bf0a5ad715cc3a293c970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_6e7e253792a86b3d912064d0863ce65cd90f3fd0d4bf0a5ad715cc3a293c970f->leave($__internal_6e7e253792a86b3d912064d0863ce65cd90f3fd0d4bf0a5ad715cc3a293c970f_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_d7cdd5c8a3d89e34500bd0baa13a924e511625a79abb604fab77c7efce31a247 = $this->env->getExtension("native_profiler");
        $__internal_d7cdd5c8a3d89e34500bd0baa13a924e511625a79abb604fab77c7efce31a247->enter($__internal_d7cdd5c8a3d89e34500bd0baa13a924e511625a79abb604fab77c7efce31a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_d7cdd5c8a3d89e34500bd0baa13a924e511625a79abb604fab77c7efce31a247->leave($__internal_d7cdd5c8a3d89e34500bd0baa13a924e511625a79abb604fab77c7efce31a247_prof);

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
