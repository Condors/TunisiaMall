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
        $__internal_dc1266feb1cc37ca6de320b357b5f3ae061a9240e2c0dbf2517b1c165fef76a7 = $this->env->getExtension("native_profiler");
        $__internal_dc1266feb1cc37ca6de320b357b5f3ae061a9240e2c0dbf2517b1c165fef76a7->enter($__internal_dc1266feb1cc37ca6de320b357b5f3ae061a9240e2c0dbf2517b1c165fef76a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dc1266feb1cc37ca6de320b357b5f3ae061a9240e2c0dbf2517b1c165fef76a7->leave($__internal_dc1266feb1cc37ca6de320b357b5f3ae061a9240e2c0dbf2517b1c165fef76a7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0e508f7966dcb9774c99603272e3e53dd0940acbbd5546f5968404cc4957b1bf = $this->env->getExtension("native_profiler");
        $__internal_0e508f7966dcb9774c99603272e3e53dd0940acbbd5546f5968404cc4957b1bf->enter($__internal_0e508f7966dcb9774c99603272e3e53dd0940acbbd5546f5968404cc4957b1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_0e508f7966dcb9774c99603272e3e53dd0940acbbd5546f5968404cc4957b1bf->leave($__internal_0e508f7966dcb9774c99603272e3e53dd0940acbbd5546f5968404cc4957b1bf_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_90d99353836844e22227a32c6c227214433ac0745c6ae7b6904bd35a8687bdf7 = $this->env->getExtension("native_profiler");
        $__internal_90d99353836844e22227a32c6c227214433ac0745c6ae7b6904bd35a8687bdf7->enter($__internal_90d99353836844e22227a32c6c227214433ac0745c6ae7b6904bd35a8687bdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_90d99353836844e22227a32c6c227214433ac0745c6ae7b6904bd35a8687bdf7->leave($__internal_90d99353836844e22227a32c6c227214433ac0745c6ae7b6904bd35a8687bdf7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eec1822c0b2e9eb4b4f5d51454febfaa2f4114d555c89e353b86aafea2fd6b3e = $this->env->getExtension("native_profiler");
        $__internal_eec1822c0b2e9eb4b4f5d51454febfaa2f4114d555c89e353b86aafea2fd6b3e->enter($__internal_eec1822c0b2e9eb4b4f5d51454febfaa2f4114d555c89e353b86aafea2fd6b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eec1822c0b2e9eb4b4f5d51454febfaa2f4114d555c89e353b86aafea2fd6b3e->leave($__internal_eec1822c0b2e9eb4b4f5d51454febfaa2f4114d555c89e353b86aafea2fd6b3e_prof);

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
