<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a825799eaebe76fe3e118590279c95c9af4f8bef7f8d8c51044587d72e2e348a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ca38cbfe75e7919f7d5ebe6e05ac4eb63a2afc77aaaa09ef8241b5dd11571dc5 = $this->env->getExtension("native_profiler");
        $__internal_ca38cbfe75e7919f7d5ebe6e05ac4eb63a2afc77aaaa09ef8241b5dd11571dc5->enter($__internal_ca38cbfe75e7919f7d5ebe6e05ac4eb63a2afc77aaaa09ef8241b5dd11571dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca38cbfe75e7919f7d5ebe6e05ac4eb63a2afc77aaaa09ef8241b5dd11571dc5->leave($__internal_ca38cbfe75e7919f7d5ebe6e05ac4eb63a2afc77aaaa09ef8241b5dd11571dc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a75fcd6e6dba77a17ac6fff2ca5c74cda955f4991396a450b25ededec389805e = $this->env->getExtension("native_profiler");
        $__internal_a75fcd6e6dba77a17ac6fff2ca5c74cda955f4991396a450b25ededec389805e->enter($__internal_a75fcd6e6dba77a17ac6fff2ca5c74cda955f4991396a450b25ededec389805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a75fcd6e6dba77a17ac6fff2ca5c74cda955f4991396a450b25ededec389805e->leave($__internal_a75fcd6e6dba77a17ac6fff2ca5c74cda955f4991396a450b25ededec389805e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
