<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_135d8db4cb8f551b43d1c917afb773689950ebffd3339b86d7d230ecdcff98df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_296590c73765b34cffbd1c14f53055a1b3a163db4728a1c706c34f07eac226a4 = $this->env->getExtension("native_profiler");
        $__internal_296590c73765b34cffbd1c14f53055a1b3a163db4728a1c706c34f07eac226a4->enter($__internal_296590c73765b34cffbd1c14f53055a1b3a163db4728a1c706c34f07eac226a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296590c73765b34cffbd1c14f53055a1b3a163db4728a1c706c34f07eac226a4->leave($__internal_296590c73765b34cffbd1c14f53055a1b3a163db4728a1c706c34f07eac226a4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10cc3b45d690378a4f12b3f245d997715bd6bad55122762e29720a8ffd15aa9f = $this->env->getExtension("native_profiler");
        $__internal_10cc3b45d690378a4f12b3f245d997715bd6bad55122762e29720a8ffd15aa9f->enter($__internal_10cc3b45d690378a4f12b3f245d997715bd6bad55122762e29720a8ffd15aa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_10cc3b45d690378a4f12b3f245d997715bd6bad55122762e29720a8ffd15aa9f->leave($__internal_10cc3b45d690378a4f12b3f245d997715bd6bad55122762e29720a8ffd15aa9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
