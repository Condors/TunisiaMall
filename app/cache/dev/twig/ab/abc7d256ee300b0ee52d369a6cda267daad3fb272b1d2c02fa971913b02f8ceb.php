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
        $__internal_8463d8023a5d21889bcd945c90b06ad6af6f8bd254f1af3a4b054d8b699a2a02 = $this->env->getExtension("native_profiler");
        $__internal_8463d8023a5d21889bcd945c90b06ad6af6f8bd254f1af3a4b054d8b699a2a02->enter($__internal_8463d8023a5d21889bcd945c90b06ad6af6f8bd254f1af3a4b054d8b699a2a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8463d8023a5d21889bcd945c90b06ad6af6f8bd254f1af3a4b054d8b699a2a02->leave($__internal_8463d8023a5d21889bcd945c90b06ad6af6f8bd254f1af3a4b054d8b699a2a02_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_900eb4c6db8bb4566d6291e933ab6782aa8c8f0a2bbb6ede3442b36cac9db707 = $this->env->getExtension("native_profiler");
        $__internal_900eb4c6db8bb4566d6291e933ab6782aa8c8f0a2bbb6ede3442b36cac9db707->enter($__internal_900eb4c6db8bb4566d6291e933ab6782aa8c8f0a2bbb6ede3442b36cac9db707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_900eb4c6db8bb4566d6291e933ab6782aa8c8f0a2bbb6ede3442b36cac9db707->leave($__internal_900eb4c6db8bb4566d6291e933ab6782aa8c8f0a2bbb6ede3442b36cac9db707_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9fa065b0cedc02f5575525df0d5dbb3449f6d5c2103eb31f57832100f00553a4 = $this->env->getExtension("native_profiler");
        $__internal_9fa065b0cedc02f5575525df0d5dbb3449f6d5c2103eb31f57832100f00553a4->enter($__internal_9fa065b0cedc02f5575525df0d5dbb3449f6d5c2103eb31f57832100f00553a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9fa065b0cedc02f5575525df0d5dbb3449f6d5c2103eb31f57832100f00553a4->leave($__internal_9fa065b0cedc02f5575525df0d5dbb3449f6d5c2103eb31f57832100f00553a4_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2c42fafe897b5c1636ff4be8e399ed75cfbd39fa8c3678d1910544a782282878 = $this->env->getExtension("native_profiler");
        $__internal_2c42fafe897b5c1636ff4be8e399ed75cfbd39fa8c3678d1910544a782282878->enter($__internal_2c42fafe897b5c1636ff4be8e399ed75cfbd39fa8c3678d1910544a782282878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2c42fafe897b5c1636ff4be8e399ed75cfbd39fa8c3678d1910544a782282878->leave($__internal_2c42fafe897b5c1636ff4be8e399ed75cfbd39fa8c3678d1910544a782282878_prof);

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
