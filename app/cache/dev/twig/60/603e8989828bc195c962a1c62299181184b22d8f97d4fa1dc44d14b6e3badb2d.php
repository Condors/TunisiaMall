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
        $__internal_5fad4f87e2d262f791eba1b4d590af102369f4eba9b9c6e7a62fd8cf23a0bbd1 = $this->env->getExtension("native_profiler");
        $__internal_5fad4f87e2d262f791eba1b4d590af102369f4eba9b9c6e7a62fd8cf23a0bbd1->enter($__internal_5fad4f87e2d262f791eba1b4d590af102369f4eba9b9c6e7a62fd8cf23a0bbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5fad4f87e2d262f791eba1b4d590af102369f4eba9b9c6e7a62fd8cf23a0bbd1->leave($__internal_5fad4f87e2d262f791eba1b4d590af102369f4eba9b9c6e7a62fd8cf23a0bbd1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f0bbb37139e5633936ffba262ed47c8ddf1f41567a8327f8758d7ec29d71e120 = $this->env->getExtension("native_profiler");
        $__internal_f0bbb37139e5633936ffba262ed47c8ddf1f41567a8327f8758d7ec29d71e120->enter($__internal_f0bbb37139e5633936ffba262ed47c8ddf1f41567a8327f8758d7ec29d71e120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f0bbb37139e5633936ffba262ed47c8ddf1f41567a8327f8758d7ec29d71e120->leave($__internal_f0bbb37139e5633936ffba262ed47c8ddf1f41567a8327f8758d7ec29d71e120_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ce5da497c04af92c1bcf075dd3e9733c9ad5c8d94b80d2382d6bb74daa99082 = $this->env->getExtension("native_profiler");
        $__internal_9ce5da497c04af92c1bcf075dd3e9733c9ad5c8d94b80d2382d6bb74daa99082->enter($__internal_9ce5da497c04af92c1bcf075dd3e9733c9ad5c8d94b80d2382d6bb74daa99082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ce5da497c04af92c1bcf075dd3e9733c9ad5c8d94b80d2382d6bb74daa99082->leave($__internal_9ce5da497c04af92c1bcf075dd3e9733c9ad5c8d94b80d2382d6bb74daa99082_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_704a5ebb65178e1ac203d9f63c9c31e9f98c400d5c6015b76d398cf954c1afb0 = $this->env->getExtension("native_profiler");
        $__internal_704a5ebb65178e1ac203d9f63c9c31e9f98c400d5c6015b76d398cf954c1afb0->enter($__internal_704a5ebb65178e1ac203d9f63c9c31e9f98c400d5c6015b76d398cf954c1afb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_704a5ebb65178e1ac203d9f63c9c31e9f98c400d5c6015b76d398cf954c1afb0->leave($__internal_704a5ebb65178e1ac203d9f63c9c31e9f98c400d5c6015b76d398cf954c1afb0_prof);

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
