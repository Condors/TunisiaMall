<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_a6e513c1f3b0f801c3043c73086489d23675be4e1166831fc5bb820dfe81201c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_efdc333ae93303baddcadf82e1102db1c58db7a15de6be5864dd4c1cd631878f = $this->env->getExtension("native_profiler");
        $__internal_efdc333ae93303baddcadf82e1102db1c58db7a15de6be5864dd4c1cd631878f->enter($__internal_efdc333ae93303baddcadf82e1102db1c58db7a15de6be5864dd4c1cd631878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efdc333ae93303baddcadf82e1102db1c58db7a15de6be5864dd4c1cd631878f->leave($__internal_efdc333ae93303baddcadf82e1102db1c58db7a15de6be5864dd4c1cd631878f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6eb7cf9a864a0c983534dd8c2530af920abc39953854aa70f94092d149c64d9 = $this->env->getExtension("native_profiler");
        $__internal_e6eb7cf9a864a0c983534dd8c2530af920abc39953854aa70f94092d149c64d9->enter($__internal_e6eb7cf9a864a0c983534dd8c2530af920abc39953854aa70f94092d149c64d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e6eb7cf9a864a0c983534dd8c2530af920abc39953854aa70f94092d149c64d9->leave($__internal_e6eb7cf9a864a0c983534dd8c2530af920abc39953854aa70f94092d149c64d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
