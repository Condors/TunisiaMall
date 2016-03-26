<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7f8c4d227c268c84fdb24fc4b5c28e6867ffdfc044585ad3f985da9de6e1ed29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_88f076fd5dd715753d8743c0b214a587698bdcfa87d499f9724091bdb0edac5f = $this->env->getExtension("native_profiler");
        $__internal_88f076fd5dd715753d8743c0b214a587698bdcfa87d499f9724091bdb0edac5f->enter($__internal_88f076fd5dd715753d8743c0b214a587698bdcfa87d499f9724091bdb0edac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f076fd5dd715753d8743c0b214a587698bdcfa87d499f9724091bdb0edac5f->leave($__internal_88f076fd5dd715753d8743c0b214a587698bdcfa87d499f9724091bdb0edac5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_189d81ed82cfbef7dee57e06f38a6310a8b6ca271a945f637572a6d00aaf3a60 = $this->env->getExtension("native_profiler");
        $__internal_189d81ed82cfbef7dee57e06f38a6310a8b6ca271a945f637572a6d00aaf3a60->enter($__internal_189d81ed82cfbef7dee57e06f38a6310a8b6ca271a945f637572a6d00aaf3a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_189d81ed82cfbef7dee57e06f38a6310a8b6ca271a945f637572a6d00aaf3a60->leave($__internal_189d81ed82cfbef7dee57e06f38a6310a8b6ca271a945f637572a6d00aaf3a60_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
