<?php

/* @CondorsTnMall/Registration/email.txt.twig */
class __TwigTemplate_a8f81b0900ee21a1c459bdb9a937417834ebd8d3fc7befd26e218b82f64e0328 extends Twig_Template
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
        $__internal_81d4824297363860dd117d391e40106ebed147fd8c56567e603dcd1fbd93bd5a = $this->env->getExtension("native_profiler");
        $__internal_81d4824297363860dd117d391e40106ebed147fd8c56567e603dcd1fbd93bd5a->enter($__internal_81d4824297363860dd117d391e40106ebed147fd8c56567e603dcd1fbd93bd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_81d4824297363860dd117d391e40106ebed147fd8c56567e603dcd1fbd93bd5a->leave($__internal_81d4824297363860dd117d391e40106ebed147fd8c56567e603dcd1fbd93bd5a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fd18dc71c75773bc59355d719fd9b33968797f0d66e45a7df6b0fab6985cf8f6 = $this->env->getExtension("native_profiler");
        $__internal_fd18dc71c75773bc59355d719fd9b33968797f0d66e45a7df6b0fab6985cf8f6->enter($__internal_fd18dc71c75773bc59355d719fd9b33968797f0d66e45a7df6b0fab6985cf8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fd18dc71c75773bc59355d719fd9b33968797f0d66e45a7df6b0fab6985cf8f6->leave($__internal_fd18dc71c75773bc59355d719fd9b33968797f0d66e45a7df6b0fab6985cf8f6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d09d2fb87c8669e880b629d545e5dd57358d984836e2a7388cdb265c4f56eb47 = $this->env->getExtension("native_profiler");
        $__internal_d09d2fb87c8669e880b629d545e5dd57358d984836e2a7388cdb265c4f56eb47->enter($__internal_d09d2fb87c8669e880b629d545e5dd57358d984836e2a7388cdb265c4f56eb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d09d2fb87c8669e880b629d545e5dd57358d984836e2a7388cdb265c4f56eb47->leave($__internal_d09d2fb87c8669e880b629d545e5dd57358d984836e2a7388cdb265c4f56eb47_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a7c4d30e2e6dde7159891c3572aa6a2ba83a95911cd0fbb45157de1f41dc5f73 = $this->env->getExtension("native_profiler");
        $__internal_a7c4d30e2e6dde7159891c3572aa6a2ba83a95911cd0fbb45157de1f41dc5f73->enter($__internal_a7c4d30e2e6dde7159891c3572aa6a2ba83a95911cd0fbb45157de1f41dc5f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a7c4d30e2e6dde7159891c3572aa6a2ba83a95911cd0fbb45157de1f41dc5f73->leave($__internal_a7c4d30e2e6dde7159891c3572aa6a2ba83a95911cd0fbb45157de1f41dc5f73_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/email.txt.twig";
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
