<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_cc5f6ea8dd7244d7b949c7876a55f12f50046bd76f60b1bcc9281b3875013e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f99a9311b8aac668976dc6b0cc0ad90528591ee0d7ee9902692527e1364a63d0 = $this->env->getExtension("native_profiler");
        $__internal_f99a9311b8aac668976dc6b0cc0ad90528591ee0d7ee9902692527e1364a63d0->enter($__internal_f99a9311b8aac668976dc6b0cc0ad90528591ee0d7ee9902692527e1364a63d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99a9311b8aac668976dc6b0cc0ad90528591ee0d7ee9902692527e1364a63d0->leave($__internal_f99a9311b8aac668976dc6b0cc0ad90528591ee0d7ee9902692527e1364a63d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a505b7fea8ac0ffdb546fdd68c093e2b6d94dc8a08abdf1b573fb9c73bee5514 = $this->env->getExtension("native_profiler");
        $__internal_a505b7fea8ac0ffdb546fdd68c093e2b6d94dc8a08abdf1b573fb9c73bee5514->enter($__internal_a505b7fea8ac0ffdb546fdd68c093e2b6d94dc8a08abdf1b573fb9c73bee5514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a505b7fea8ac0ffdb546fdd68c093e2b6d94dc8a08abdf1b573fb9c73bee5514->leave($__internal_a505b7fea8ac0ffdb546fdd68c093e2b6d94dc8a08abdf1b573fb9c73bee5514_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
