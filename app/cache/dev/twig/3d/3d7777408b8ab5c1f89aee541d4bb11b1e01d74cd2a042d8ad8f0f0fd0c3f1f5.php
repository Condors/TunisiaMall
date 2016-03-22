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
        $__internal_8cb3f856f194a7b421a5defd49069102236453d6aafc9afe2c7aa60b8ff34143 = $this->env->getExtension("native_profiler");
        $__internal_8cb3f856f194a7b421a5defd49069102236453d6aafc9afe2c7aa60b8ff34143->enter($__internal_8cb3f856f194a7b421a5defd49069102236453d6aafc9afe2c7aa60b8ff34143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb3f856f194a7b421a5defd49069102236453d6aafc9afe2c7aa60b8ff34143->leave($__internal_8cb3f856f194a7b421a5defd49069102236453d6aafc9afe2c7aa60b8ff34143_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86129f6236d6f120748b27349eabdf32b87a6c8a5c5e02fb1cd159d061b580c0 = $this->env->getExtension("native_profiler");
        $__internal_86129f6236d6f120748b27349eabdf32b87a6c8a5c5e02fb1cd159d061b580c0->enter($__internal_86129f6236d6f120748b27349eabdf32b87a6c8a5c5e02fb1cd159d061b580c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_86129f6236d6f120748b27349eabdf32b87a6c8a5c5e02fb1cd159d061b580c0->leave($__internal_86129f6236d6f120748b27349eabdf32b87a6c8a5c5e02fb1cd159d061b580c0_prof);

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
