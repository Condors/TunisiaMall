<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_04feca836fa5af42644b5870961515867f01233eb3ea2e00824a07925a6cc9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_02c84db974a6ca9deafef1e8e418f84f793ada9a9014e6b1c93268c27d346e27 = $this->env->getExtension("native_profiler");
        $__internal_02c84db974a6ca9deafef1e8e418f84f793ada9a9014e6b1c93268c27d346e27->enter($__internal_02c84db974a6ca9deafef1e8e418f84f793ada9a9014e6b1c93268c27d346e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c84db974a6ca9deafef1e8e418f84f793ada9a9014e6b1c93268c27d346e27->leave($__internal_02c84db974a6ca9deafef1e8e418f84f793ada9a9014e6b1c93268c27d346e27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_611c9bf4ec4679ba3f5520d058793a0c3946e2a8b8e9cf0704674a6060e790c6 = $this->env->getExtension("native_profiler");
        $__internal_611c9bf4ec4679ba3f5520d058793a0c3946e2a8b8e9cf0704674a6060e790c6->enter($__internal_611c9bf4ec4679ba3f5520d058793a0c3946e2a8b8e9cf0704674a6060e790c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_611c9bf4ec4679ba3f5520d058793a0c3946e2a8b8e9cf0704674a6060e790c6->leave($__internal_611c9bf4ec4679ba3f5520d058793a0c3946e2a8b8e9cf0704674a6060e790c6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
