<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_7f8c4d227c268c84fdb24fc4b5c28e6867ffdfc044585ad3f985da9de6e1ed29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_8abd4e5bb741cb905a8827c59e59acfd1a41edf0bf053ee974c0e8a6c4499427 = $this->env->getExtension("native_profiler");
        $__internal_8abd4e5bb741cb905a8827c59e59acfd1a41edf0bf053ee974c0e8a6c4499427->enter($__internal_8abd4e5bb741cb905a8827c59e59acfd1a41edf0bf053ee974c0e8a6c4499427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abd4e5bb741cb905a8827c59e59acfd1a41edf0bf053ee974c0e8a6c4499427->leave($__internal_8abd4e5bb741cb905a8827c59e59acfd1a41edf0bf053ee974c0e8a6c4499427_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70f2173ec1bd6c90439072c55904444fe0c0f7748a3d835d139e0fe97ae6a028 = $this->env->getExtension("native_profiler");
        $__internal_70f2173ec1bd6c90439072c55904444fe0c0f7748a3d835d139e0fe97ae6a028->enter($__internal_70f2173ec1bd6c90439072c55904444fe0c0f7748a3d835d139e0fe97ae6a028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_70f2173ec1bd6c90439072c55904444fe0c0f7748a3d835d139e0fe97ae6a028->leave($__internal_70f2173ec1bd6c90439072c55904444fe0c0f7748a3d835d139e0fe97ae6a028_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
