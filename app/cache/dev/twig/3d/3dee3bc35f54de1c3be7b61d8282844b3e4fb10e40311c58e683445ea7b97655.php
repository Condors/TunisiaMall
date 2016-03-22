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
        $__internal_b071f3e4479dc9016a4a4e4502147255c8e7331421194029acd5ab01b4ff780d = $this->env->getExtension("native_profiler");
        $__internal_b071f3e4479dc9016a4a4e4502147255c8e7331421194029acd5ab01b4ff780d->enter($__internal_b071f3e4479dc9016a4a4e4502147255c8e7331421194029acd5ab01b4ff780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b071f3e4479dc9016a4a4e4502147255c8e7331421194029acd5ab01b4ff780d->leave($__internal_b071f3e4479dc9016a4a4e4502147255c8e7331421194029acd5ab01b4ff780d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12cebc550e99d8e7da502096b0a28834e07ab60995b207a0ca5b847a66788d11 = $this->env->getExtension("native_profiler");
        $__internal_12cebc550e99d8e7da502096b0a28834e07ab60995b207a0ca5b847a66788d11->enter($__internal_12cebc550e99d8e7da502096b0a28834e07ab60995b207a0ca5b847a66788d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_12cebc550e99d8e7da502096b0a28834e07ab60995b207a0ca5b847a66788d11->leave($__internal_12cebc550e99d8e7da502096b0a28834e07ab60995b207a0ca5b847a66788d11_prof);

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
