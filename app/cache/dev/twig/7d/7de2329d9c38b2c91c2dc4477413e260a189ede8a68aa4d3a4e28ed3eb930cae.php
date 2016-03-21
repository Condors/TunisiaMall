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
        $__internal_1ae0c93bc1cc476917325b9f8f1ef3be03ea94252649f6bc07115bf6426432e4 = $this->env->getExtension("native_profiler");
        $__internal_1ae0c93bc1cc476917325b9f8f1ef3be03ea94252649f6bc07115bf6426432e4->enter($__internal_1ae0c93bc1cc476917325b9f8f1ef3be03ea94252649f6bc07115bf6426432e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ae0c93bc1cc476917325b9f8f1ef3be03ea94252649f6bc07115bf6426432e4->leave($__internal_1ae0c93bc1cc476917325b9f8f1ef3be03ea94252649f6bc07115bf6426432e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15af11e9dde09ac0b2b74f9042218eb8eb7b2b934e7588bd7073f43050f98ad0 = $this->env->getExtension("native_profiler");
        $__internal_15af11e9dde09ac0b2b74f9042218eb8eb7b2b934e7588bd7073f43050f98ad0->enter($__internal_15af11e9dde09ac0b2b74f9042218eb8eb7b2b934e7588bd7073f43050f98ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_15af11e9dde09ac0b2b74f9042218eb8eb7b2b934e7588bd7073f43050f98ad0->leave($__internal_15af11e9dde09ac0b2b74f9042218eb8eb7b2b934e7588bd7073f43050f98ad0_prof);

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
