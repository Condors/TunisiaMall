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
        $__internal_4f1b0633b0163b5abbcd4835da9642ae1e977f358d575ce9f12d1fae6bfc2ef2 = $this->env->getExtension("native_profiler");
        $__internal_4f1b0633b0163b5abbcd4835da9642ae1e977f358d575ce9f12d1fae6bfc2ef2->enter($__internal_4f1b0633b0163b5abbcd4835da9642ae1e977f358d575ce9f12d1fae6bfc2ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1b0633b0163b5abbcd4835da9642ae1e977f358d575ce9f12d1fae6bfc2ef2->leave($__internal_4f1b0633b0163b5abbcd4835da9642ae1e977f358d575ce9f12d1fae6bfc2ef2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc1d626902b1c0a363e97f1de7a4c6d6064373852ad5af549f8d7331dd42f294 = $this->env->getExtension("native_profiler");
        $__internal_fc1d626902b1c0a363e97f1de7a4c6d6064373852ad5af549f8d7331dd42f294->enter($__internal_fc1d626902b1c0a363e97f1de7a4c6d6064373852ad5af549f8d7331dd42f294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_fc1d626902b1c0a363e97f1de7a4c6d6064373852ad5af549f8d7331dd42f294->leave($__internal_fc1d626902b1c0a363e97f1de7a4c6d6064373852ad5af549f8d7331dd42f294_prof);

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
