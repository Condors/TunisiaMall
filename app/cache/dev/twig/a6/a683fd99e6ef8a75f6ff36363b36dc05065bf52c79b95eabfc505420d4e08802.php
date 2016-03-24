<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_615d022b0413094de65ab85796791c3fdcc4d3b4fe4b3384d4f2f90367e327d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_c3c47dab5fa30cda916dd1e1c2deae6cb9a7e1eae852c24ba2462eebd9a4a48f = $this->env->getExtension("native_profiler");
        $__internal_c3c47dab5fa30cda916dd1e1c2deae6cb9a7e1eae852c24ba2462eebd9a4a48f->enter($__internal_c3c47dab5fa30cda916dd1e1c2deae6cb9a7e1eae852c24ba2462eebd9a4a48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3c47dab5fa30cda916dd1e1c2deae6cb9a7e1eae852c24ba2462eebd9a4a48f->leave($__internal_c3c47dab5fa30cda916dd1e1c2deae6cb9a7e1eae852c24ba2462eebd9a4a48f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e39d33bb9089b63d8eace90d9763e642d3991f0cad33cc0f7adc7f6d18cc309 = $this->env->getExtension("native_profiler");
        $__internal_0e39d33bb9089b63d8eace90d9763e642d3991f0cad33cc0f7adc7f6d18cc309->enter($__internal_0e39d33bb9089b63d8eace90d9763e642d3991f0cad33cc0f7adc7f6d18cc309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0e39d33bb9089b63d8eace90d9763e642d3991f0cad33cc0f7adc7f6d18cc309->leave($__internal_0e39d33bb9089b63d8eace90d9763e642d3991f0cad33cc0f7adc7f6d18cc309_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
