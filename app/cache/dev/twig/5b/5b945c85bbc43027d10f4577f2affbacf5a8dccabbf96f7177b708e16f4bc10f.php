<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_b79709a28b4693230bcd783ed62a96f10f9133d360583a68c84729d66c4ed40d extends Twig_Template
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
        $__internal_7d3b3c4e79f6432be62c8399d1d7d8d3c12371810868e39b12a8537ec7f4a4b8 = $this->env->getExtension("native_profiler");
        $__internal_7d3b3c4e79f6432be62c8399d1d7d8d3c12371810868e39b12a8537ec7f4a4b8->enter($__internal_7d3b3c4e79f6432be62c8399d1d7d8d3c12371810868e39b12a8537ec7f4a4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7d3b3c4e79f6432be62c8399d1d7d8d3c12371810868e39b12a8537ec7f4a4b8->leave($__internal_7d3b3c4e79f6432be62c8399d1d7d8d3c12371810868e39b12a8537ec7f4a4b8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c6330a2ba770a72570170605c09d8b3081325782170fe2443d5ceb774c53852e = $this->env->getExtension("native_profiler");
        $__internal_c6330a2ba770a72570170605c09d8b3081325782170fe2443d5ceb774c53852e->enter($__internal_c6330a2ba770a72570170605c09d8b3081325782170fe2443d5ceb774c53852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c6330a2ba770a72570170605c09d8b3081325782170fe2443d5ceb774c53852e->leave($__internal_c6330a2ba770a72570170605c09d8b3081325782170fe2443d5ceb774c53852e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c9ac00b0585a5aeb50fe136c32950520e80e455eaa675788a4d3c58cb89227c = $this->env->getExtension("native_profiler");
        $__internal_9c9ac00b0585a5aeb50fe136c32950520e80e455eaa675788a4d3c58cb89227c->enter($__internal_9c9ac00b0585a5aeb50fe136c32950520e80e455eaa675788a4d3c58cb89227c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9c9ac00b0585a5aeb50fe136c32950520e80e455eaa675788a4d3c58cb89227c->leave($__internal_9c9ac00b0585a5aeb50fe136c32950520e80e455eaa675788a4d3c58cb89227c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cb5d8ad987362db37a3866fc50a3352add4dde5cd17a6878aa692c39a5310958 = $this->env->getExtension("native_profiler");
        $__internal_cb5d8ad987362db37a3866fc50a3352add4dde5cd17a6878aa692c39a5310958->enter($__internal_cb5d8ad987362db37a3866fc50a3352add4dde5cd17a6878aa692c39a5310958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cb5d8ad987362db37a3866fc50a3352add4dde5cd17a6878aa692c39a5310958->leave($__internal_cb5d8ad987362db37a3866fc50a3352add4dde5cd17a6878aa692c39a5310958_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
