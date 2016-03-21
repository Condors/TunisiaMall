<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6d00e1cfa4ec4a5d528c15aaea45e5335a26ad2354c93fabb41240e65a1dd06f extends Twig_Template
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
        $__internal_9dddc6a291831a46cb4285250dfec042b157ca4c696ec011e4b352696dc45a65 = $this->env->getExtension("native_profiler");
        $__internal_9dddc6a291831a46cb4285250dfec042b157ca4c696ec011e4b352696dc45a65->enter($__internal_9dddc6a291831a46cb4285250dfec042b157ca4c696ec011e4b352696dc45a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9dddc6a291831a46cb4285250dfec042b157ca4c696ec011e4b352696dc45a65->leave($__internal_9dddc6a291831a46cb4285250dfec042b157ca4c696ec011e4b352696dc45a65_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8bb95f22cdec5e2557a138bbab5f6b6e052fcc9348238773d1db59e35f98e5b2 = $this->env->getExtension("native_profiler");
        $__internal_8bb95f22cdec5e2557a138bbab5f6b6e052fcc9348238773d1db59e35f98e5b2->enter($__internal_8bb95f22cdec5e2557a138bbab5f6b6e052fcc9348238773d1db59e35f98e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bb95f22cdec5e2557a138bbab5f6b6e052fcc9348238773d1db59e35f98e5b2->leave($__internal_8bb95f22cdec5e2557a138bbab5f6b6e052fcc9348238773d1db59e35f98e5b2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_66704959bef0aa61963afbc8ef5c4ea65b1ebaedea8b99cc5cf6005664477678 = $this->env->getExtension("native_profiler");
        $__internal_66704959bef0aa61963afbc8ef5c4ea65b1ebaedea8b99cc5cf6005664477678->enter($__internal_66704959bef0aa61963afbc8ef5c4ea65b1ebaedea8b99cc5cf6005664477678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_66704959bef0aa61963afbc8ef5c4ea65b1ebaedea8b99cc5cf6005664477678->leave($__internal_66704959bef0aa61963afbc8ef5c4ea65b1ebaedea8b99cc5cf6005664477678_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3226d6e589c9b57d921feb7ffdf095256a8716e153b1aaf1389d8cecec57f8ab = $this->env->getExtension("native_profiler");
        $__internal_3226d6e589c9b57d921feb7ffdf095256a8716e153b1aaf1389d8cecec57f8ab->enter($__internal_3226d6e589c9b57d921feb7ffdf095256a8716e153b1aaf1389d8cecec57f8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3226d6e589c9b57d921feb7ffdf095256a8716e153b1aaf1389d8cecec57f8ab->leave($__internal_3226d6e589c9b57d921feb7ffdf095256a8716e153b1aaf1389d8cecec57f8ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
