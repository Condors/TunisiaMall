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
        $__internal_1d04571d12c52423f3049eb0323d30526139fb49d15f3287b83a61e4983d01cf = $this->env->getExtension("native_profiler");
        $__internal_1d04571d12c52423f3049eb0323d30526139fb49d15f3287b83a61e4983d01cf->enter($__internal_1d04571d12c52423f3049eb0323d30526139fb49d15f3287b83a61e4983d01cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d04571d12c52423f3049eb0323d30526139fb49d15f3287b83a61e4983d01cf->leave($__internal_1d04571d12c52423f3049eb0323d30526139fb49d15f3287b83a61e4983d01cf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9173367fc811062a2fa2401c7bbab3518a167dc8f98a87cff4774bba1210d9c6 = $this->env->getExtension("native_profiler");
        $__internal_9173367fc811062a2fa2401c7bbab3518a167dc8f98a87cff4774bba1210d9c6->enter($__internal_9173367fc811062a2fa2401c7bbab3518a167dc8f98a87cff4774bba1210d9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9173367fc811062a2fa2401c7bbab3518a167dc8f98a87cff4774bba1210d9c6->leave($__internal_9173367fc811062a2fa2401c7bbab3518a167dc8f98a87cff4774bba1210d9c6_prof);

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
