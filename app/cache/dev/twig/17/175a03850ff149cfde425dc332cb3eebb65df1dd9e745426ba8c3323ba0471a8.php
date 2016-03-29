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
        $__internal_a625b6862884a672d7ed6ed87f18520ad788c46b5d66acdf8aae1393e5121f44 = $this->env->getExtension("native_profiler");
        $__internal_a625b6862884a672d7ed6ed87f18520ad788c46b5d66acdf8aae1393e5121f44->enter($__internal_a625b6862884a672d7ed6ed87f18520ad788c46b5d66acdf8aae1393e5121f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a625b6862884a672d7ed6ed87f18520ad788c46b5d66acdf8aae1393e5121f44->leave($__internal_a625b6862884a672d7ed6ed87f18520ad788c46b5d66acdf8aae1393e5121f44_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_eba8411e6d8afdc6e91584da263fa7a53a18b286ef7ab913eef1bb21cb8067ff = $this->env->getExtension("native_profiler");
        $__internal_eba8411e6d8afdc6e91584da263fa7a53a18b286ef7ab913eef1bb21cb8067ff->enter($__internal_eba8411e6d8afdc6e91584da263fa7a53a18b286ef7ab913eef1bb21cb8067ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_eba8411e6d8afdc6e91584da263fa7a53a18b286ef7ab913eef1bb21cb8067ff->leave($__internal_eba8411e6d8afdc6e91584da263fa7a53a18b286ef7ab913eef1bb21cb8067ff_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5c0ea5a250e2c97969cb67e3422f0bf7222ebef706d91e9d8b31315d46e70239 = $this->env->getExtension("native_profiler");
        $__internal_5c0ea5a250e2c97969cb67e3422f0bf7222ebef706d91e9d8b31315d46e70239->enter($__internal_5c0ea5a250e2c97969cb67e3422f0bf7222ebef706d91e9d8b31315d46e70239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5c0ea5a250e2c97969cb67e3422f0bf7222ebef706d91e9d8b31315d46e70239->leave($__internal_5c0ea5a250e2c97969cb67e3422f0bf7222ebef706d91e9d8b31315d46e70239_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a51eda304efbafc609d1dbbf6cfe43dc1ae3ec4961c400131596d273c84c7a2b = $this->env->getExtension("native_profiler");
        $__internal_a51eda304efbafc609d1dbbf6cfe43dc1ae3ec4961c400131596d273c84c7a2b->enter($__internal_a51eda304efbafc609d1dbbf6cfe43dc1ae3ec4961c400131596d273c84c7a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a51eda304efbafc609d1dbbf6cfe43dc1ae3ec4961c400131596d273c84c7a2b->leave($__internal_a51eda304efbafc609d1dbbf6cfe43dc1ae3ec4961c400131596d273c84c7a2b_prof);

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
