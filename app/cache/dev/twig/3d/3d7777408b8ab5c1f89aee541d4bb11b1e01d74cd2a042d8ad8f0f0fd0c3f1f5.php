<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_31062fb56fc5ef3877b697bae16c2b891bc0a1d50698bba6d9e29ff1445b4231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ecb8698dfd1895a5cf45b0b55d7979d37761c7d1ef0b074ebe6d28594c9bd7a6 = $this->env->getExtension("native_profiler");
        $__internal_ecb8698dfd1895a5cf45b0b55d7979d37761c7d1ef0b074ebe6d28594c9bd7a6->enter($__internal_ecb8698dfd1895a5cf45b0b55d7979d37761c7d1ef0b074ebe6d28594c9bd7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb8698dfd1895a5cf45b0b55d7979d37761c7d1ef0b074ebe6d28594c9bd7a6->leave($__internal_ecb8698dfd1895a5cf45b0b55d7979d37761c7d1ef0b074ebe6d28594c9bd7a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee9bfa8117385435a0ee84cd960c797fa2fd6da190c448dcd0f71b7f7ab4dcd8 = $this->env->getExtension("native_profiler");
        $__internal_ee9bfa8117385435a0ee84cd960c797fa2fd6da190c448dcd0f71b7f7ab4dcd8->enter($__internal_ee9bfa8117385435a0ee84cd960c797fa2fd6da190c448dcd0f71b7f7ab4dcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_ee9bfa8117385435a0ee84cd960c797fa2fd6da190c448dcd0f71b7f7ab4dcd8->leave($__internal_ee9bfa8117385435a0ee84cd960c797fa2fd6da190c448dcd0f71b7f7ab4dcd8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
