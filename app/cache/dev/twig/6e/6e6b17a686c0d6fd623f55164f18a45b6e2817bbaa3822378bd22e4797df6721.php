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
        $__internal_0df378e5babcd3f39e9ab30d3f784688b4b7d3f0d500c78ac9f578a8f388e7d5 = $this->env->getExtension("native_profiler");
        $__internal_0df378e5babcd3f39e9ab30d3f784688b4b7d3f0d500c78ac9f578a8f388e7d5->enter($__internal_0df378e5babcd3f39e9ab30d3f784688b4b7d3f0d500c78ac9f578a8f388e7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0df378e5babcd3f39e9ab30d3f784688b4b7d3f0d500c78ac9f578a8f388e7d5->leave($__internal_0df378e5babcd3f39e9ab30d3f784688b4b7d3f0d500c78ac9f578a8f388e7d5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fcbc412a4235ea999d42350f1b57b13862547e89ebac8e014d92593ca5a7973 = $this->env->getExtension("native_profiler");
        $__internal_2fcbc412a4235ea999d42350f1b57b13862547e89ebac8e014d92593ca5a7973->enter($__internal_2fcbc412a4235ea999d42350f1b57b13862547e89ebac8e014d92593ca5a7973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2fcbc412a4235ea999d42350f1b57b13862547e89ebac8e014d92593ca5a7973->leave($__internal_2fcbc412a4235ea999d42350f1b57b13862547e89ebac8e014d92593ca5a7973_prof);

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
