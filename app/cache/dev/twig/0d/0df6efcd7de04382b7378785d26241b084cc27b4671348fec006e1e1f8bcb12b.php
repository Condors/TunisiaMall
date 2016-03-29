<?php

/* @CondorsTnMall/Registration/register.html.twig */
class __TwigTemplate_1f750277d6e8089be44a0938c3aead5a02ba01d3004d1ff95cdb6a703b1e7751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/register.html.twig", 1);
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
        $__internal_3a21a533c91b0923f5084522b952854a50abf7be19954ce60fa0fa7abe80ee8b = $this->env->getExtension("native_profiler");
        $__internal_3a21a533c91b0923f5084522b952854a50abf7be19954ce60fa0fa7abe80ee8b->enter($__internal_3a21a533c91b0923f5084522b952854a50abf7be19954ce60fa0fa7abe80ee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a21a533c91b0923f5084522b952854a50abf7be19954ce60fa0fa7abe80ee8b->leave($__internal_3a21a533c91b0923f5084522b952854a50abf7be19954ce60fa0fa7abe80ee8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e2d367804c8961280704b929cbd46217b32f40ae4466e2ccaa536da378be7b1 = $this->env->getExtension("native_profiler");
        $__internal_3e2d367804c8961280704b929cbd46217b32f40ae4466e2ccaa536da378be7b1->enter($__internal_3e2d367804c8961280704b929cbd46217b32f40ae4466e2ccaa536da378be7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@CondorsTnMall/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3e2d367804c8961280704b929cbd46217b32f40ae4466e2ccaa536da378be7b1->leave($__internal_3e2d367804c8961280704b929cbd46217b32f40ae4466e2ccaa536da378be7b1_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/register.html.twig";
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
