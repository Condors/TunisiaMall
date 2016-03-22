<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c1c7453da4d79aaac6ec6edbc19543d2cac9988082a30cbcd379df6b49e3ddda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_594002f87d3d3b02aed94089acb363ccc4e3308a577a2880929cde28e5fa4b90 = $this->env->getExtension("native_profiler");
        $__internal_594002f87d3d3b02aed94089acb363ccc4e3308a577a2880929cde28e5fa4b90->enter($__internal_594002f87d3d3b02aed94089acb363ccc4e3308a577a2880929cde28e5fa4b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594002f87d3d3b02aed94089acb363ccc4e3308a577a2880929cde28e5fa4b90->leave($__internal_594002f87d3d3b02aed94089acb363ccc4e3308a577a2880929cde28e5fa4b90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f20ad568176ca237f3f22b0dbc9655a69b107eb32c54966cb18cb743e5c04fa = $this->env->getExtension("native_profiler");
        $__internal_4f20ad568176ca237f3f22b0dbc9655a69b107eb32c54966cb18cb743e5c04fa->enter($__internal_4f20ad568176ca237f3f22b0dbc9655a69b107eb32c54966cb18cb743e5c04fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4f20ad568176ca237f3f22b0dbc9655a69b107eb32c54966cb18cb743e5c04fa->leave($__internal_4f20ad568176ca237f3f22b0dbc9655a69b107eb32c54966cb18cb743e5c04fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
