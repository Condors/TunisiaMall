<?php

/* CondorsTnMallBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f432bd7b93bd7b9aa62023be82b625225cf18ce3c28eebf5ce0a5c4f28f90ca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CondorsTnMallBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_73b3b8e9e83509435bea062cdfbf230e22f0042e7b5debecd5919fc78bc24bba = $this->env->getExtension("native_profiler");
        $__internal_73b3b8e9e83509435bea062cdfbf230e22f0042e7b5debecd5919fc78bc24bba->enter($__internal_73b3b8e9e83509435bea062cdfbf230e22f0042e7b5debecd5919fc78bc24bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b3b8e9e83509435bea062cdfbf230e22f0042e7b5debecd5919fc78bc24bba->leave($__internal_73b3b8e9e83509435bea062cdfbf230e22f0042e7b5debecd5919fc78bc24bba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7094fc1c6e7961335091ec3c3f7ae32c0bb5d4774797a95d80c3d52a767e064e = $this->env->getExtension("native_profiler");
        $__internal_7094fc1c6e7961335091ec3c3f7ae32c0bb5d4774797a95d80c3d52a767e064e->enter($__internal_7094fc1c6e7961335091ec3c3f7ae32c0bb5d4774797a95d80c3d52a767e064e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_7094fc1c6e7961335091ec3c3f7ae32c0bb5d4774797a95d80c3d52a767e064e->leave($__internal_7094fc1c6e7961335091ec3c3f7ae32c0bb5d4774797a95d80c3d52a767e064e_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
