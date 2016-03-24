<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_65fc3ce54bfeec090c6713278a190e2bc0f1bc1122c124650a94ea9bf91edb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_8b181081024644d0cb3efe938898714bf77886f4516f401fafa4ca863a6006c4 = $this->env->getExtension("native_profiler");
        $__internal_8b181081024644d0cb3efe938898714bf77886f4516f401fafa4ca863a6006c4->enter($__internal_8b181081024644d0cb3efe938898714bf77886f4516f401fafa4ca863a6006c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b181081024644d0cb3efe938898714bf77886f4516f401fafa4ca863a6006c4->leave($__internal_8b181081024644d0cb3efe938898714bf77886f4516f401fafa4ca863a6006c4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79fcb93d5e8ede8404a5c58bee1ea12540ee5d8dcfb58b28ffa50bbdaebc3cf6 = $this->env->getExtension("native_profiler");
        $__internal_79fcb93d5e8ede8404a5c58bee1ea12540ee5d8dcfb58b28ffa50bbdaebc3cf6->enter($__internal_79fcb93d5e8ede8404a5c58bee1ea12540ee5d8dcfb58b28ffa50bbdaebc3cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_79fcb93d5e8ede8404a5c58bee1ea12540ee5d8dcfb58b28ffa50bbdaebc3cf6->leave($__internal_79fcb93d5e8ede8404a5c58bee1ea12540ee5d8dcfb58b28ffa50bbdaebc3cf6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
