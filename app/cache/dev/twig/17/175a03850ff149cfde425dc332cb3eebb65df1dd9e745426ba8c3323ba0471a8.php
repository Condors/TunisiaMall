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
        $__internal_d2b701fcb0205a40164919d8338a0f028588fbb155cf64384b24407a2ba1a08a = $this->env->getExtension("native_profiler");
        $__internal_d2b701fcb0205a40164919d8338a0f028588fbb155cf64384b24407a2ba1a08a->enter($__internal_d2b701fcb0205a40164919d8338a0f028588fbb155cf64384b24407a2ba1a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d2b701fcb0205a40164919d8338a0f028588fbb155cf64384b24407a2ba1a08a->leave($__internal_d2b701fcb0205a40164919d8338a0f028588fbb155cf64384b24407a2ba1a08a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c272acff424416093ff7933f65949b4b9fb0475428e528f033d90b2e834f662 = $this->env->getExtension("native_profiler");
        $__internal_4c272acff424416093ff7933f65949b4b9fb0475428e528f033d90b2e834f662->enter($__internal_4c272acff424416093ff7933f65949b4b9fb0475428e528f033d90b2e834f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c272acff424416093ff7933f65949b4b9fb0475428e528f033d90b2e834f662->leave($__internal_4c272acff424416093ff7933f65949b4b9fb0475428e528f033d90b2e834f662_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b8b7fb138f8d8a2ec28908c51ebcae9e064cb02df3cadb6c486bc37bbae1a583 = $this->env->getExtension("native_profiler");
        $__internal_b8b7fb138f8d8a2ec28908c51ebcae9e064cb02df3cadb6c486bc37bbae1a583->enter($__internal_b8b7fb138f8d8a2ec28908c51ebcae9e064cb02df3cadb6c486bc37bbae1a583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b8b7fb138f8d8a2ec28908c51ebcae9e064cb02df3cadb6c486bc37bbae1a583->leave($__internal_b8b7fb138f8d8a2ec28908c51ebcae9e064cb02df3cadb6c486bc37bbae1a583_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b9eb9e5f2b452123dcda4c21d61d30c31c6c1b938c9bb55abde35844935be9f2 = $this->env->getExtension("native_profiler");
        $__internal_b9eb9e5f2b452123dcda4c21d61d30c31c6c1b938c9bb55abde35844935be9f2->enter($__internal_b9eb9e5f2b452123dcda4c21d61d30c31c6c1b938c9bb55abde35844935be9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b9eb9e5f2b452123dcda4c21d61d30c31c6c1b938c9bb55abde35844935be9f2->leave($__internal_b9eb9e5f2b452123dcda4c21d61d30c31c6c1b938c9bb55abde35844935be9f2_prof);

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
