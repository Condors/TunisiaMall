<?php

/* @CondorsTnMall/Registration/register.html.twig */
class __TwigTemplate_1f750277d6e8089be44a0938c3aead5a02ba01d3004d1ff95cdb6a703b1e7751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/register.html.twig", 1);
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
        $__internal_43d6a508cf5e51b6bebf51d369abcea60affbefb1b7111347507e15d6c57be3c = $this->env->getExtension("native_profiler");
        $__internal_43d6a508cf5e51b6bebf51d369abcea60affbefb1b7111347507e15d6c57be3c->enter($__internal_43d6a508cf5e51b6bebf51d369abcea60affbefb1b7111347507e15d6c57be3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d6a508cf5e51b6bebf51d369abcea60affbefb1b7111347507e15d6c57be3c->leave($__internal_43d6a508cf5e51b6bebf51d369abcea60affbefb1b7111347507e15d6c57be3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a86660d278ede99be4d35c241e405ee04a25c92ef3d36f2b45fc1dec6d3179c4 = $this->env->getExtension("native_profiler");
        $__internal_a86660d278ede99be4d35c241e405ee04a25c92ef3d36f2b45fc1dec6d3179c4->enter($__internal_a86660d278ede99be4d35c241e405ee04a25c92ef3d36f2b45fc1dec6d3179c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@CondorsTnMall/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a86660d278ede99be4d35c241e405ee04a25c92ef3d36f2b45fc1dec6d3179c4->leave($__internal_a86660d278ede99be4d35c241e405ee04a25c92ef3d36f2b45fc1dec6d3179c4_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
