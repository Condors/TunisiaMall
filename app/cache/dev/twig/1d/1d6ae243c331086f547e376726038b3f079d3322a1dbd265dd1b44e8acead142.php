<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7f8c4d227c268c84fdb24fc4b5c28e6867ffdfc044585ad3f985da9de6e1ed29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_26d9e113e23737379a24c9ecaabe08065fdca808fb85d6753241d8a1c4c4edbf = $this->env->getExtension("native_profiler");
        $__internal_26d9e113e23737379a24c9ecaabe08065fdca808fb85d6753241d8a1c4c4edbf->enter($__internal_26d9e113e23737379a24c9ecaabe08065fdca808fb85d6753241d8a1c4c4edbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d9e113e23737379a24c9ecaabe08065fdca808fb85d6753241d8a1c4c4edbf->leave($__internal_26d9e113e23737379a24c9ecaabe08065fdca808fb85d6753241d8a1c4c4edbf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2e18a8b38d9f0829946f45351ac0746a1c563a06931641901289539a00984135 = $this->env->getExtension("native_profiler");
        $__internal_2e18a8b38d9f0829946f45351ac0746a1c563a06931641901289539a00984135->enter($__internal_2e18a8b38d9f0829946f45351ac0746a1c563a06931641901289539a00984135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2e18a8b38d9f0829946f45351ac0746a1c563a06931641901289539a00984135->leave($__internal_2e18a8b38d9f0829946f45351ac0746a1c563a06931641901289539a00984135_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
