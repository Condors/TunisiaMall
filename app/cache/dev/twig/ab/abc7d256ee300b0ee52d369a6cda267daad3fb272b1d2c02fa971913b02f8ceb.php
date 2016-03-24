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
        $__internal_64332eedc53cb7a4e157fe73518f2d40c4ae26a29bff7a865df617e49c61ad29 = $this->env->getExtension("native_profiler");
        $__internal_64332eedc53cb7a4e157fe73518f2d40c4ae26a29bff7a865df617e49c61ad29->enter($__internal_64332eedc53cb7a4e157fe73518f2d40c4ae26a29bff7a865df617e49c61ad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_64332eedc53cb7a4e157fe73518f2d40c4ae26a29bff7a865df617e49c61ad29->leave($__internal_64332eedc53cb7a4e157fe73518f2d40c4ae26a29bff7a865df617e49c61ad29_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5e75ad5a9b6f107c5cda8ba34e99cea98f2ec1b57264cad4ed27df6fba5522f4 = $this->env->getExtension("native_profiler");
        $__internal_5e75ad5a9b6f107c5cda8ba34e99cea98f2ec1b57264cad4ed27df6fba5522f4->enter($__internal_5e75ad5a9b6f107c5cda8ba34e99cea98f2ec1b57264cad4ed27df6fba5522f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5e75ad5a9b6f107c5cda8ba34e99cea98f2ec1b57264cad4ed27df6fba5522f4->leave($__internal_5e75ad5a9b6f107c5cda8ba34e99cea98f2ec1b57264cad4ed27df6fba5522f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d78cdd2d5b520eddddddbfc178fee3da14c85d5877d0879e07779891f748ef0e = $this->env->getExtension("native_profiler");
        $__internal_d78cdd2d5b520eddddddbfc178fee3da14c85d5877d0879e07779891f748ef0e->enter($__internal_d78cdd2d5b520eddddddbfc178fee3da14c85d5877d0879e07779891f748ef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d78cdd2d5b520eddddddbfc178fee3da14c85d5877d0879e07779891f748ef0e->leave($__internal_d78cdd2d5b520eddddddbfc178fee3da14c85d5877d0879e07779891f748ef0e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b98023f9300d3a53a91e12d1f0636b168b7f360f1f91ff145d76f9fe21f017ac = $this->env->getExtension("native_profiler");
        $__internal_b98023f9300d3a53a91e12d1f0636b168b7f360f1f91ff145d76f9fe21f017ac->enter($__internal_b98023f9300d3a53a91e12d1f0636b168b7f360f1f91ff145d76f9fe21f017ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b98023f9300d3a53a91e12d1f0636b168b7f360f1f91ff145d76f9fe21f017ac->leave($__internal_b98023f9300d3a53a91e12d1f0636b168b7f360f1f91ff145d76f9fe21f017ac_prof);

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
