<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b79709a28b4693230bcd783ed62a96f10f9133d360583a68c84729d66c4ed40d extends Twig_Template
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
        $__internal_9e2d373d52c44e2055d3dd35b7d55154569e9c050e0c92a16a45c67750eb8583 = $this->env->getExtension("native_profiler");
        $__internal_9e2d373d52c44e2055d3dd35b7d55154569e9c050e0c92a16a45c67750eb8583->enter($__internal_9e2d373d52c44e2055d3dd35b7d55154569e9c050e0c92a16a45c67750eb8583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e2d373d52c44e2055d3dd35b7d55154569e9c050e0c92a16a45c67750eb8583->leave($__internal_9e2d373d52c44e2055d3dd35b7d55154569e9c050e0c92a16a45c67750eb8583_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f5def8bcc09446be77d603ff50228cad7809aa8a97186d10de64ffbc654ec158 = $this->env->getExtension("native_profiler");
        $__internal_f5def8bcc09446be77d603ff50228cad7809aa8a97186d10de64ffbc654ec158->enter($__internal_f5def8bcc09446be77d603ff50228cad7809aa8a97186d10de64ffbc654ec158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f5def8bcc09446be77d603ff50228cad7809aa8a97186d10de64ffbc654ec158->leave($__internal_f5def8bcc09446be77d603ff50228cad7809aa8a97186d10de64ffbc654ec158_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_746092fa2b6e0b84361a9764299123921a101a08799d5cffee98c567e31e18cb = $this->env->getExtension("native_profiler");
        $__internal_746092fa2b6e0b84361a9764299123921a101a08799d5cffee98c567e31e18cb->enter($__internal_746092fa2b6e0b84361a9764299123921a101a08799d5cffee98c567e31e18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_746092fa2b6e0b84361a9764299123921a101a08799d5cffee98c567e31e18cb->leave($__internal_746092fa2b6e0b84361a9764299123921a101a08799d5cffee98c567e31e18cb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5bc7e1277b475d4bcb8fd254c1762dcd4f70e27841f82c385652f833e07d6986 = $this->env->getExtension("native_profiler");
        $__internal_5bc7e1277b475d4bcb8fd254c1762dcd4f70e27841f82c385652f833e07d6986->enter($__internal_5bc7e1277b475d4bcb8fd254c1762dcd4f70e27841f82c385652f833e07d6986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5bc7e1277b475d4bcb8fd254c1762dcd4f70e27841f82c385652f833e07d6986->leave($__internal_5bc7e1277b475d4bcb8fd254c1762dcd4f70e27841f82c385652f833e07d6986_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
