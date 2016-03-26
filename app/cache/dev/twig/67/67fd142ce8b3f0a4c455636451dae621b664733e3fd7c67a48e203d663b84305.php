<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1767b042796e7ee7ed77bc0a3fdee3f65ab44acd0762474d28f42b790b7e9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_88c441fc4dace7e451d4810e202e48f4a10fd5fd0490de160a51ed7f14242b1f = $this->env->getExtension("native_profiler");
        $__internal_88c441fc4dace7e451d4810e202e48f4a10fd5fd0490de160a51ed7f14242b1f->enter($__internal_88c441fc4dace7e451d4810e202e48f4a10fd5fd0490de160a51ed7f14242b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c441fc4dace7e451d4810e202e48f4a10fd5fd0490de160a51ed7f14242b1f->leave($__internal_88c441fc4dace7e451d4810e202e48f4a10fd5fd0490de160a51ed7f14242b1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cddf52b95b52361737816bbabc0376ea9b0ae260ddc9f69952ca154f91164f0 = $this->env->getExtension("native_profiler");
        $__internal_2cddf52b95b52361737816bbabc0376ea9b0ae260ddc9f69952ca154f91164f0->enter($__internal_2cddf52b95b52361737816bbabc0376ea9b0ae260ddc9f69952ca154f91164f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2cddf52b95b52361737816bbabc0376ea9b0ae260ddc9f69952ca154f91164f0->leave($__internal_2cddf52b95b52361737816bbabc0376ea9b0ae260ddc9f69952ca154f91164f0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
