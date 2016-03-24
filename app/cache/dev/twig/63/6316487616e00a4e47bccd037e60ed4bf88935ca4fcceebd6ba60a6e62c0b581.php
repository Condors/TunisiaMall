<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a7ab57818cc3e6a0f2cbefd2e85a8c8310c6d0f6eee2dab0deded0a82f62c915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_c78e91b58b5f9e019ed4c9b1c11e5ab8ae98112a5ec66ca370d92b9d457a7a21 = $this->env->getExtension("native_profiler");
        $__internal_c78e91b58b5f9e019ed4c9b1c11e5ab8ae98112a5ec66ca370d92b9d457a7a21->enter($__internal_c78e91b58b5f9e019ed4c9b1c11e5ab8ae98112a5ec66ca370d92b9d457a7a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78e91b58b5f9e019ed4c9b1c11e5ab8ae98112a5ec66ca370d92b9d457a7a21->leave($__internal_c78e91b58b5f9e019ed4c9b1c11e5ab8ae98112a5ec66ca370d92b9d457a7a21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c5b5110a5378ab00d7e673c58ef6ac66115c4090bc13a62aa93b20dc812edec = $this->env->getExtension("native_profiler");
        $__internal_0c5b5110a5378ab00d7e673c58ef6ac66115c4090bc13a62aa93b20dc812edec->enter($__internal_0c5b5110a5378ab00d7e673c58ef6ac66115c4090bc13a62aa93b20dc812edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0c5b5110a5378ab00d7e673c58ef6ac66115c4090bc13a62aa93b20dc812edec->leave($__internal_0c5b5110a5378ab00d7e673c58ef6ac66115c4090bc13a62aa93b20dc812edec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
