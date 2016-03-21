<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4f978111b0b20f168f9de23052868b624e9bf052d9836b86497f495557a4cd92 extends Twig_Template
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
        $__internal_330fef387ac3f414dadf87771f8cf1c460d82a1d8fb3b708617b5ca8d3bd73cd = $this->env->getExtension("native_profiler");
        $__internal_330fef387ac3f414dadf87771f8cf1c460d82a1d8fb3b708617b5ca8d3bd73cd->enter($__internal_330fef387ac3f414dadf87771f8cf1c460d82a1d8fb3b708617b5ca8d3bd73cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_330fef387ac3f414dadf87771f8cf1c460d82a1d8fb3b708617b5ca8d3bd73cd->leave($__internal_330fef387ac3f414dadf87771f8cf1c460d82a1d8fb3b708617b5ca8d3bd73cd_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_147f368738b59bf89f9d4d6e0ded56cdc5e5d53d73226f377ffde323439de0e2 = $this->env->getExtension("native_profiler");
        $__internal_147f368738b59bf89f9d4d6e0ded56cdc5e5d53d73226f377ffde323439de0e2->enter($__internal_147f368738b59bf89f9d4d6e0ded56cdc5e5d53d73226f377ffde323439de0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_147f368738b59bf89f9d4d6e0ded56cdc5e5d53d73226f377ffde323439de0e2->leave($__internal_147f368738b59bf89f9d4d6e0ded56cdc5e5d53d73226f377ffde323439de0e2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fc184030d44591794dfc0b963037990a81fb216a9413590267ee8d5ee2a2a441 = $this->env->getExtension("native_profiler");
        $__internal_fc184030d44591794dfc0b963037990a81fb216a9413590267ee8d5ee2a2a441->enter($__internal_fc184030d44591794dfc0b963037990a81fb216a9413590267ee8d5ee2a2a441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fc184030d44591794dfc0b963037990a81fb216a9413590267ee8d5ee2a2a441->leave($__internal_fc184030d44591794dfc0b963037990a81fb216a9413590267ee8d5ee2a2a441_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ee46108c29133e681d33a6db05843265b4bc6a0d2bd2c967cb1ae860946597b2 = $this->env->getExtension("native_profiler");
        $__internal_ee46108c29133e681d33a6db05843265b4bc6a0d2bd2c967cb1ae860946597b2->enter($__internal_ee46108c29133e681d33a6db05843265b4bc6a0d2bd2c967cb1ae860946597b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ee46108c29133e681d33a6db05843265b4bc6a0d2bd2c967cb1ae860946597b2->leave($__internal_ee46108c29133e681d33a6db05843265b4bc6a0d2bd2c967cb1ae860946597b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
