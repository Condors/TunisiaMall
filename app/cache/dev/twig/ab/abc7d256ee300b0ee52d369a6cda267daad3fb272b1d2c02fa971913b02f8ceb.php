<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6351d63da473e69807c0ff28cacc81f01da114b421ad8f9992e3c34941c533eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9d411a8cabd6d4cc99e98886eca533421288b594b69fceeba62c478b18317b0 = $this->env->getExtension("native_profiler");
        $__internal_c9d411a8cabd6d4cc99e98886eca533421288b594b69fceeba62c478b18317b0->enter($__internal_c9d411a8cabd6d4cc99e98886eca533421288b594b69fceeba62c478b18317b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c9d411a8cabd6d4cc99e98886eca533421288b594b69fceeba62c478b18317b0->leave($__internal_c9d411a8cabd6d4cc99e98886eca533421288b594b69fceeba62c478b18317b0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_72ca4b8da1e7d0abb25dd3e0dab04ffae7813a7ecfb39c77b2bf4871e9889392 = $this->env->getExtension("native_profiler");
        $__internal_72ca4b8da1e7d0abb25dd3e0dab04ffae7813a7ecfb39c77b2bf4871e9889392->enter($__internal_72ca4b8da1e7d0abb25dd3e0dab04ffae7813a7ecfb39c77b2bf4871e9889392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_72ca4b8da1e7d0abb25dd3e0dab04ffae7813a7ecfb39c77b2bf4871e9889392->leave($__internal_72ca4b8da1e7d0abb25dd3e0dab04ffae7813a7ecfb39c77b2bf4871e9889392_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_082f8ae3672a085609a15f678c274b35d2477652d7b28bd06c1262ca0f6645fb = $this->env->getExtension("native_profiler");
        $__internal_082f8ae3672a085609a15f678c274b35d2477652d7b28bd06c1262ca0f6645fb->enter($__internal_082f8ae3672a085609a15f678c274b35d2477652d7b28bd06c1262ca0f6645fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_082f8ae3672a085609a15f678c274b35d2477652d7b28bd06c1262ca0f6645fb->leave($__internal_082f8ae3672a085609a15f678c274b35d2477652d7b28bd06c1262ca0f6645fb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6798a58b05efff79dee792caef9eefda9e1c02b781ef1b04d911ae583f03323 = $this->env->getExtension("native_profiler");
        $__internal_b6798a58b05efff79dee792caef9eefda9e1c02b781ef1b04d911ae583f03323->enter($__internal_b6798a58b05efff79dee792caef9eefda9e1c02b781ef1b04d911ae583f03323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6798a58b05efff79dee792caef9eefda9e1c02b781ef1b04d911ae583f03323->leave($__internal_b6798a58b05efff79dee792caef9eefda9e1c02b781ef1b04d911ae583f03323_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
