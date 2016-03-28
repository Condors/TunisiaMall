<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_615d022b0413094de65ab85796791c3fdcc4d3b4fe4b3384d4f2f90367e327d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_cd3513e70d6c84202d47f9d3c6a35c7b737fa2e9928492a193f2bb42b7355705 = $this->env->getExtension("native_profiler");
        $__internal_cd3513e70d6c84202d47f9d3c6a35c7b737fa2e9928492a193f2bb42b7355705->enter($__internal_cd3513e70d6c84202d47f9d3c6a35c7b737fa2e9928492a193f2bb42b7355705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd3513e70d6c84202d47f9d3c6a35c7b737fa2e9928492a193f2bb42b7355705->leave($__internal_cd3513e70d6c84202d47f9d3c6a35c7b737fa2e9928492a193f2bb42b7355705_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ddafa26c0ba6ac6ea17663a03e14811780b2efa2f3174d8ffa425e8c54c633d = $this->env->getExtension("native_profiler");
        $__internal_5ddafa26c0ba6ac6ea17663a03e14811780b2efa2f3174d8ffa425e8c54c633d->enter($__internal_5ddafa26c0ba6ac6ea17663a03e14811780b2efa2f3174d8ffa425e8c54c633d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_5ddafa26c0ba6ac6ea17663a03e14811780b2efa2f3174d8ffa425e8c54c633d->leave($__internal_5ddafa26c0ba6ac6ea17663a03e14811780b2efa2f3174d8ffa425e8c54c633d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
