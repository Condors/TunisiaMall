<?php

/* CondorsTnMallBundle:Registration:email.txt.twig */
class __TwigTemplate_469eaee0f0aa5cb21c66301a704bdf04b85e6ab2fafc93d7d5caf3b251e3a7f5 extends Twig_Template
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
        $__internal_2c49f98c5b84e0a807c1458ea72af14bb49e93ef2e3850e87acf2055fc7eae06 = $this->env->getExtension("native_profiler");
        $__internal_2c49f98c5b84e0a807c1458ea72af14bb49e93ef2e3850e87acf2055fc7eae06->enter($__internal_2c49f98c5b84e0a807c1458ea72af14bb49e93ef2e3850e87acf2055fc7eae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2c49f98c5b84e0a807c1458ea72af14bb49e93ef2e3850e87acf2055fc7eae06->leave($__internal_2c49f98c5b84e0a807c1458ea72af14bb49e93ef2e3850e87acf2055fc7eae06_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d76e986ae90bbc1dc674d230bbfdcb15040ae9df8b2e4341f2dcef7733ccb9c0 = $this->env->getExtension("native_profiler");
        $__internal_d76e986ae90bbc1dc674d230bbfdcb15040ae9df8b2e4341f2dcef7733ccb9c0->enter($__internal_d76e986ae90bbc1dc674d230bbfdcb15040ae9df8b2e4341f2dcef7733ccb9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d76e986ae90bbc1dc674d230bbfdcb15040ae9df8b2e4341f2dcef7733ccb9c0->leave($__internal_d76e986ae90bbc1dc674d230bbfdcb15040ae9df8b2e4341f2dcef7733ccb9c0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ff431f6ef3293ede724d41a7369b438c9bf75d3107694ee3cd9b9c501bcda7e8 = $this->env->getExtension("native_profiler");
        $__internal_ff431f6ef3293ede724d41a7369b438c9bf75d3107694ee3cd9b9c501bcda7e8->enter($__internal_ff431f6ef3293ede724d41a7369b438c9bf75d3107694ee3cd9b9c501bcda7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ff431f6ef3293ede724d41a7369b438c9bf75d3107694ee3cd9b9c501bcda7e8->leave($__internal_ff431f6ef3293ede724d41a7369b438c9bf75d3107694ee3cd9b9c501bcda7e8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8cbde2a08d60f45ac27b1c1c6e86d3cb98796daddddc555ed303cd18ce128b26 = $this->env->getExtension("native_profiler");
        $__internal_8cbde2a08d60f45ac27b1c1c6e86d3cb98796daddddc555ed303cd18ce128b26->enter($__internal_8cbde2a08d60f45ac27b1c1c6e86d3cb98796daddddc555ed303cd18ce128b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8cbde2a08d60f45ac27b1c1c6e86d3cb98796daddddc555ed303cd18ce128b26->leave($__internal_8cbde2a08d60f45ac27b1c1c6e86d3cb98796daddddc555ed303cd18ce128b26_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Registration:email.txt.twig";
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
