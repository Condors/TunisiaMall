<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_82a8060a2a5628d8978e420eb5f2eb4d7c4f2ef8a40136723f1c7c9f17dc0308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_d6d18c39702e59e78026154ddc6ab76bfe62f2d3fac274783725c58c328efb1b = $this->env->getExtension("native_profiler");
        $__internal_d6d18c39702e59e78026154ddc6ab76bfe62f2d3fac274783725c58c328efb1b->enter($__internal_d6d18c39702e59e78026154ddc6ab76bfe62f2d3fac274783725c58c328efb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d18c39702e59e78026154ddc6ab76bfe62f2d3fac274783725c58c328efb1b->leave($__internal_d6d18c39702e59e78026154ddc6ab76bfe62f2d3fac274783725c58c328efb1b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0f106623bb7e47ac71e18e1bf76453403fd9e930b5ce17cd3c6dfb6bf4850d9 = $this->env->getExtension("native_profiler");
        $__internal_a0f106623bb7e47ac71e18e1bf76453403fd9e930b5ce17cd3c6dfb6bf4850d9->enter($__internal_a0f106623bb7e47ac71e18e1bf76453403fd9e930b5ce17cd3c6dfb6bf4850d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a0f106623bb7e47ac71e18e1bf76453403fd9e930b5ce17cd3c6dfb6bf4850d9->leave($__internal_a0f106623bb7e47ac71e18e1bf76453403fd9e930b5ce17cd3c6dfb6bf4850d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
