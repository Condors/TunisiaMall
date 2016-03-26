<?php

/* CondorsTnMallBundle:Registration:register.html.twig */
class __TwigTemplate_a1e9534e454f2d14e6244fc9c27fa4c0c029afeedeae7f1fd72ff9e0dd3d261b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CondorsTnMallBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea0489a28dedf9992fb74a601ecc0d9420a4afb33f144599c929c00108cc2eac = $this->env->getExtension("native_profiler");
        $__internal_ea0489a28dedf9992fb74a601ecc0d9420a4afb33f144599c929c00108cc2eac->enter($__internal_ea0489a28dedf9992fb74a601ecc0d9420a4afb33f144599c929c00108cc2eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0489a28dedf9992fb74a601ecc0d9420a4afb33f144599c929c00108cc2eac->leave($__internal_ea0489a28dedf9992fb74a601ecc0d9420a4afb33f144599c929c00108cc2eac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e540f40a34a2f8cd6fa16864bd268ff2c3abb479a8b952f6fec4059efd0c2536 = $this->env->getExtension("native_profiler");
        $__internal_e540f40a34a2f8cd6fa16864bd268ff2c3abb479a8b952f6fec4059efd0c2536->enter($__internal_e540f40a34a2f8cd6fa16864bd268ff2c3abb479a8b952f6fec4059efd0c2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "CondorsTnMallBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e540f40a34a2f8cd6fa16864bd268ff2c3abb479a8b952f6fec4059efd0c2536->leave($__internal_e540f40a34a2f8cd6fa16864bd268ff2c3abb479a8b952f6fec4059efd0c2536_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
