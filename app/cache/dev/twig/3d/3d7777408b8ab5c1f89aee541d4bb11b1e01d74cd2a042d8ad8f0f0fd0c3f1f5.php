<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_31062fb56fc5ef3877b697bae16c2b891bc0a1d50698bba6d9e29ff1445b4231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_3233f3de6c7fc1d64e95c4076f22eb0879ac5f988fb378a8d5bb4cc436da5280 = $this->env->getExtension("native_profiler");
        $__internal_3233f3de6c7fc1d64e95c4076f22eb0879ac5f988fb378a8d5bb4cc436da5280->enter($__internal_3233f3de6c7fc1d64e95c4076f22eb0879ac5f988fb378a8d5bb4cc436da5280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3233f3de6c7fc1d64e95c4076f22eb0879ac5f988fb378a8d5bb4cc436da5280->leave($__internal_3233f3de6c7fc1d64e95c4076f22eb0879ac5f988fb378a8d5bb4cc436da5280_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df667f808c67d4ca6dbab7ed57c49419c57d526d3676ff6711470bf090fb8afe = $this->env->getExtension("native_profiler");
        $__internal_df667f808c67d4ca6dbab7ed57c49419c57d526d3676ff6711470bf090fb8afe->enter($__internal_df667f808c67d4ca6dbab7ed57c49419c57d526d3676ff6711470bf090fb8afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_df667f808c67d4ca6dbab7ed57c49419c57d526d3676ff6711470bf090fb8afe->leave($__internal_df667f808c67d4ca6dbab7ed57c49419c57d526d3676ff6711470bf090fb8afe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
