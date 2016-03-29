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
        $__internal_a2cf1c9fcfafc0ed11370502c1b846302868e6b63c2f7aac3b3d7cc808c14bdb = $this->env->getExtension("native_profiler");
        $__internal_a2cf1c9fcfafc0ed11370502c1b846302868e6b63c2f7aac3b3d7cc808c14bdb->enter($__internal_a2cf1c9fcfafc0ed11370502c1b846302868e6b63c2f7aac3b3d7cc808c14bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a2cf1c9fcfafc0ed11370502c1b846302868e6b63c2f7aac3b3d7cc808c14bdb->leave($__internal_a2cf1c9fcfafc0ed11370502c1b846302868e6b63c2f7aac3b3d7cc808c14bdb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_749b1e0a44c66a7fd023764eece81eb84d8dd7de1911e203fc0c28af6c224506 = $this->env->getExtension("native_profiler");
        $__internal_749b1e0a44c66a7fd023764eece81eb84d8dd7de1911e203fc0c28af6c224506->enter($__internal_749b1e0a44c66a7fd023764eece81eb84d8dd7de1911e203fc0c28af6c224506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_749b1e0a44c66a7fd023764eece81eb84d8dd7de1911e203fc0c28af6c224506->leave($__internal_749b1e0a44c66a7fd023764eece81eb84d8dd7de1911e203fc0c28af6c224506_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ec01bde7b21caa3245d9357391370a28eeca4eb72e0ca907f08df9bcb2b5a9b8 = $this->env->getExtension("native_profiler");
        $__internal_ec01bde7b21caa3245d9357391370a28eeca4eb72e0ca907f08df9bcb2b5a9b8->enter($__internal_ec01bde7b21caa3245d9357391370a28eeca4eb72e0ca907f08df9bcb2b5a9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ec01bde7b21caa3245d9357391370a28eeca4eb72e0ca907f08df9bcb2b5a9b8->leave($__internal_ec01bde7b21caa3245d9357391370a28eeca4eb72e0ca907f08df9bcb2b5a9b8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_80c21b722cc5b40908333c3508b5ac5e9656cd35aa6251201e0e7f08988e8af9 = $this->env->getExtension("native_profiler");
        $__internal_80c21b722cc5b40908333c3508b5ac5e9656cd35aa6251201e0e7f08988e8af9->enter($__internal_80c21b722cc5b40908333c3508b5ac5e9656cd35aa6251201e0e7f08988e8af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_80c21b722cc5b40908333c3508b5ac5e9656cd35aa6251201e0e7f08988e8af9->leave($__internal_80c21b722cc5b40908333c3508b5ac5e9656cd35aa6251201e0e7f08988e8af9_prof);

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
