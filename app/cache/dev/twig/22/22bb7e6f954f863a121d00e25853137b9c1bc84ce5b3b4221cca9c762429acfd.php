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
        $__internal_0d943869be518a0b8b50adc0f416e537a43d1c223362ce4588b15f68a8015ef0 = $this->env->getExtension("native_profiler");
        $__internal_0d943869be518a0b8b50adc0f416e537a43d1c223362ce4588b15f68a8015ef0->enter($__internal_0d943869be518a0b8b50adc0f416e537a43d1c223362ce4588b15f68a8015ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d943869be518a0b8b50adc0f416e537a43d1c223362ce4588b15f68a8015ef0->leave($__internal_0d943869be518a0b8b50adc0f416e537a43d1c223362ce4588b15f68a8015ef0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7534135e3a48e794c75eaa3680aa7e2f47e82784884924c8ae06b91c3bef3d72 = $this->env->getExtension("native_profiler");
        $__internal_7534135e3a48e794c75eaa3680aa7e2f47e82784884924c8ae06b91c3bef3d72->enter($__internal_7534135e3a48e794c75eaa3680aa7e2f47e82784884924c8ae06b91c3bef3d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "CondorsTnMallBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7534135e3a48e794c75eaa3680aa7e2f47e82784884924c8ae06b91c3bef3d72->leave($__internal_7534135e3a48e794c75eaa3680aa7e2f47e82784884924c8ae06b91c3bef3d72_prof);

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
