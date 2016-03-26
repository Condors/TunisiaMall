<?php

/* @CondorsTnMall/Responsable/index.html.twig */
class __TwigTemplate_ff88bf966988f7406b7734e18cb87767e620c22d76654da6136ebc6910ffad95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "@CondorsTnMall/Responsable/index.html.twig", 1);
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
        $__internal_d732134445374402e32edf304072bbeaf38a41e8bbb01b6f0f1a51dc3f060dde = $this->env->getExtension("native_profiler");
        $__internal_d732134445374402e32edf304072bbeaf38a41e8bbb01b6f0f1a51dc3f060dde->enter($__internal_d732134445374402e32edf304072bbeaf38a41e8bbb01b6f0f1a51dc3f060dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d732134445374402e32edf304072bbeaf38a41e8bbb01b6f0f1a51dc3f060dde->leave($__internal_d732134445374402e32edf304072bbeaf38a41e8bbb01b6f0f1a51dc3f060dde_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_00dbd2263bd036a587fdf0870d54a80622124e3847af6734da5c3e7d1a225eed = $this->env->getExtension("native_profiler");
        $__internal_00dbd2263bd036a587fdf0870d54a80622124e3847af6734da5c3e7d1a225eed->enter($__internal_00dbd2263bd036a587fdf0870d54a80622124e3847af6734da5c3e7d1a225eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_00dbd2263bd036a587fdf0870d54a80622124e3847af6734da5c3e7d1a225eed->leave($__internal_00dbd2263bd036a587fdf0870d54a80622124e3847af6734da5c3e7d1a225eed_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_36805b29e27d76705c8713d9f70106e7f5a78deaab36b45025f8195a5dcb1033 = $this->env->getExtension("native_profiler");
        $__internal_36805b29e27d76705c8713d9f70106e7f5a78deaab36b45025f8195a5dcb1033->enter($__internal_36805b29e27d76705c8713d9f70106e7f5a78deaab36b45025f8195a5dcb1033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_36805b29e27d76705c8713d9f70106e7f5a78deaab36b45025f8195a5dcb1033->leave($__internal_36805b29e27d76705c8713d9f70106e7f5a78deaab36b45025f8195a5dcb1033_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ef41fb89fbd41340a855771b30f1080d5f58fe785ebe63f03eafb4cf5e9dd177 = $this->env->getExtension("native_profiler");
        $__internal_ef41fb89fbd41340a855771b30f1080d5f58fe785ebe63f03eafb4cf5e9dd177->enter($__internal_ef41fb89fbd41340a855771b30f1080d5f58fe785ebe63f03eafb4cf5e9dd177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_ef41fb89fbd41340a855771b30f1080d5f58fe785ebe63f03eafb4cf5e9dd177->leave($__internal_ef41fb89fbd41340a855771b30f1080d5f58fe785ebe63f03eafb4cf5e9dd177_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Responsable/index.html.twig";
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
