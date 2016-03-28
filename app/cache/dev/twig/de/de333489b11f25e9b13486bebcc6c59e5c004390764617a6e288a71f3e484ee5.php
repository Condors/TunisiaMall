<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_626674d07526e42d6a172b1f92ef2e1e0cd9863c343ed5b510e741ee8175c38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_faa97aefd29090f4c58eb71e1761d6101cecab94b97e5272dea74259457fee1d = $this->env->getExtension("native_profiler");
        $__internal_faa97aefd29090f4c58eb71e1761d6101cecab94b97e5272dea74259457fee1d->enter($__internal_faa97aefd29090f4c58eb71e1761d6101cecab94b97e5272dea74259457fee1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa97aefd29090f4c58eb71e1761d6101cecab94b97e5272dea74259457fee1d->leave($__internal_faa97aefd29090f4c58eb71e1761d6101cecab94b97e5272dea74259457fee1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6565244301d2e46c29b36b5589d64f2232b7d4e889dabe52a0c70f7d2617174 = $this->env->getExtension("native_profiler");
        $__internal_d6565244301d2e46c29b36b5589d64f2232b7d4e889dabe52a0c70f7d2617174->enter($__internal_d6565244301d2e46c29b36b5589d64f2232b7d4e889dabe52a0c70f7d2617174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d6565244301d2e46c29b36b5589d64f2232b7d4e889dabe52a0c70f7d2617174->leave($__internal_d6565244301d2e46c29b36b5589d64f2232b7d4e889dabe52a0c70f7d2617174_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
