<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b140fb18f9da3912c429beffdc5b35e354c42bca8a57d8ffabb7ce752316958d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_f52ff2a0cef1229cfa6039ac9f36df20275e7f101cb72b36b3a849c16591bc77 = $this->env->getExtension("native_profiler");
        $__internal_f52ff2a0cef1229cfa6039ac9f36df20275e7f101cb72b36b3a849c16591bc77->enter($__internal_f52ff2a0cef1229cfa6039ac9f36df20275e7f101cb72b36b3a849c16591bc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52ff2a0cef1229cfa6039ac9f36df20275e7f101cb72b36b3a849c16591bc77->leave($__internal_f52ff2a0cef1229cfa6039ac9f36df20275e7f101cb72b36b3a849c16591bc77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59bf93396b66f4d184376f1c7a53ef313468d5ca11182d34ac4f3595cd958c27 = $this->env->getExtension("native_profiler");
        $__internal_59bf93396b66f4d184376f1c7a53ef313468d5ca11182d34ac4f3595cd958c27->enter($__internal_59bf93396b66f4d184376f1c7a53ef313468d5ca11182d34ac4f3595cd958c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_59bf93396b66f4d184376f1c7a53ef313468d5ca11182d34ac4f3595cd958c27->leave($__internal_59bf93396b66f4d184376f1c7a53ef313468d5ca11182d34ac4f3595cd958c27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
