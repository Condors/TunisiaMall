<?php

/* CondorsTnMallBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_654b0a7ce600c4f8f32165ff04eb096af884d5fa98ba332c8c64dacb4714b3a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CondorsTnMallBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_df778227870cfcc8e13e91edce505c2a53a8a4c1610906ba2d7c7cc2817e1d96 = $this->env->getExtension("native_profiler");
        $__internal_df778227870cfcc8e13e91edce505c2a53a8a4c1610906ba2d7c7cc2817e1d96->enter($__internal_df778227870cfcc8e13e91edce505c2a53a8a4c1610906ba2d7c7cc2817e1d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df778227870cfcc8e13e91edce505c2a53a8a4c1610906ba2d7c7cc2817e1d96->leave($__internal_df778227870cfcc8e13e91edce505c2a53a8a4c1610906ba2d7c7cc2817e1d96_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2ccef72a912c646f1227e56351fa04f6c3ca7a4fe3bd79939bec5e6a1637145 = $this->env->getExtension("native_profiler");
        $__internal_b2ccef72a912c646f1227e56351fa04f6c3ca7a4fe3bd79939bec5e6a1637145->enter($__internal_b2ccef72a912c646f1227e56351fa04f6c3ca7a4fe3bd79939bec5e6a1637145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b2ccef72a912c646f1227e56351fa04f6c3ca7a4fe3bd79939bec5e6a1637145->leave($__internal_b2ccef72a912c646f1227e56351fa04f6c3ca7a4fe3bd79939bec5e6a1637145_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
