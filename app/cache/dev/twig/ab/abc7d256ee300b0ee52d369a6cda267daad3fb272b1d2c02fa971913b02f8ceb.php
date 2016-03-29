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
        $__internal_45d423759e98cc4f9e161ef766720380ff1d00f5807cfaa34993f06ee5a3cd22 = $this->env->getExtension("native_profiler");
        $__internal_45d423759e98cc4f9e161ef766720380ff1d00f5807cfaa34993f06ee5a3cd22->enter($__internal_45d423759e98cc4f9e161ef766720380ff1d00f5807cfaa34993f06ee5a3cd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_45d423759e98cc4f9e161ef766720380ff1d00f5807cfaa34993f06ee5a3cd22->leave($__internal_45d423759e98cc4f9e161ef766720380ff1d00f5807cfaa34993f06ee5a3cd22_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e5a4918a25964d8cef7354a0103fbe0f076f9f72937503f9062b4d5e64020789 = $this->env->getExtension("native_profiler");
        $__internal_e5a4918a25964d8cef7354a0103fbe0f076f9f72937503f9062b4d5e64020789->enter($__internal_e5a4918a25964d8cef7354a0103fbe0f076f9f72937503f9062b4d5e64020789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_e5a4918a25964d8cef7354a0103fbe0f076f9f72937503f9062b4d5e64020789->leave($__internal_e5a4918a25964d8cef7354a0103fbe0f076f9f72937503f9062b4d5e64020789_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d9b27ec8539718151caa8d5e4e51c0286460d4f3db3be3f398c55d02a3212977 = $this->env->getExtension("native_profiler");
        $__internal_d9b27ec8539718151caa8d5e4e51c0286460d4f3db3be3f398c55d02a3212977->enter($__internal_d9b27ec8539718151caa8d5e4e51c0286460d4f3db3be3f398c55d02a3212977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d9b27ec8539718151caa8d5e4e51c0286460d4f3db3be3f398c55d02a3212977->leave($__internal_d9b27ec8539718151caa8d5e4e51c0286460d4f3db3be3f398c55d02a3212977_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cd3df4ba85870be2664dddb2c972daadf093e12a7755e9db91cf940b95dd6cc2 = $this->env->getExtension("native_profiler");
        $__internal_cd3df4ba85870be2664dddb2c972daadf093e12a7755e9db91cf940b95dd6cc2->enter($__internal_cd3df4ba85870be2664dddb2c972daadf093e12a7755e9db91cf940b95dd6cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cd3df4ba85870be2664dddb2c972daadf093e12a7755e9db91cf940b95dd6cc2->leave($__internal_cd3df4ba85870be2664dddb2c972daadf093e12a7755e9db91cf940b95dd6cc2_prof);

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
