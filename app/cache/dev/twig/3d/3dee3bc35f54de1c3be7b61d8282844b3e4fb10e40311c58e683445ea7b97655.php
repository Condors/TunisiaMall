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
        $__internal_31c1a9b97d4b041b418266185c2be553408234bff9ba8ca317c4e576049b9855 = $this->env->getExtension("native_profiler");
        $__internal_31c1a9b97d4b041b418266185c2be553408234bff9ba8ca317c4e576049b9855->enter($__internal_31c1a9b97d4b041b418266185c2be553408234bff9ba8ca317c4e576049b9855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c1a9b97d4b041b418266185c2be553408234bff9ba8ca317c4e576049b9855->leave($__internal_31c1a9b97d4b041b418266185c2be553408234bff9ba8ca317c4e576049b9855_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21643fc8d771cac15b259b46ed3fb22e3519a7cd4e748927e8ca3ecb9257aea6 = $this->env->getExtension("native_profiler");
        $__internal_21643fc8d771cac15b259b46ed3fb22e3519a7cd4e748927e8ca3ecb9257aea6->enter($__internal_21643fc8d771cac15b259b46ed3fb22e3519a7cd4e748927e8ca3ecb9257aea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_21643fc8d771cac15b259b46ed3fb22e3519a7cd4e748927e8ca3ecb9257aea6->leave($__internal_21643fc8d771cac15b259b46ed3fb22e3519a7cd4e748927e8ca3ecb9257aea6_prof);

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
