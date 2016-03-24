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
        $__internal_19c213e94722c07fa19e65bcc1ddce6e5e7b0caad36025e22a9ea2e68c59f059 = $this->env->getExtension("native_profiler");
        $__internal_19c213e94722c07fa19e65bcc1ddce6e5e7b0caad36025e22a9ea2e68c59f059->enter($__internal_19c213e94722c07fa19e65bcc1ddce6e5e7b0caad36025e22a9ea2e68c59f059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c213e94722c07fa19e65bcc1ddce6e5e7b0caad36025e22a9ea2e68c59f059->leave($__internal_19c213e94722c07fa19e65bcc1ddce6e5e7b0caad36025e22a9ea2e68c59f059_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07030508b575ed6b0fb2d92aa6bb093abd66afacb7766fbd03f17397ddf78edc = $this->env->getExtension("native_profiler");
        $__internal_07030508b575ed6b0fb2d92aa6bb093abd66afacb7766fbd03f17397ddf78edc->enter($__internal_07030508b575ed6b0fb2d92aa6bb093abd66afacb7766fbd03f17397ddf78edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@CondorsTnMall/Registration/register.html.twig", 4)->display($context);
        
        $__internal_07030508b575ed6b0fb2d92aa6bb093abd66afacb7766fbd03f17397ddf78edc->leave($__internal_07030508b575ed6b0fb2d92aa6bb093abd66afacb7766fbd03f17397ddf78edc_prof);

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
