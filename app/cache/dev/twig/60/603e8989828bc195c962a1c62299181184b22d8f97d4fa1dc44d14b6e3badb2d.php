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
        $__internal_05a96b604dfa4350955fa96d65e8b2396957a3e2e63bc89fde8413664c979e6f = $this->env->getExtension("native_profiler");
        $__internal_05a96b604dfa4350955fa96d65e8b2396957a3e2e63bc89fde8413664c979e6f->enter($__internal_05a96b604dfa4350955fa96d65e8b2396957a3e2e63bc89fde8413664c979e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_05a96b604dfa4350955fa96d65e8b2396957a3e2e63bc89fde8413664c979e6f->leave($__internal_05a96b604dfa4350955fa96d65e8b2396957a3e2e63bc89fde8413664c979e6f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fd98974d6bea95b5a2527c770992a9e22a12720cbb4eff75f6820664a96e1407 = $this->env->getExtension("native_profiler");
        $__internal_fd98974d6bea95b5a2527c770992a9e22a12720cbb4eff75f6820664a96e1407->enter($__internal_fd98974d6bea95b5a2527c770992a9e22a12720cbb4eff75f6820664a96e1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fd98974d6bea95b5a2527c770992a9e22a12720cbb4eff75f6820664a96e1407->leave($__internal_fd98974d6bea95b5a2527c770992a9e22a12720cbb4eff75f6820664a96e1407_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5ee5bcddadb07db587bcb8d90873e05c8aae2f1bbfbaf5bbbfde19d3d066e8db = $this->env->getExtension("native_profiler");
        $__internal_5ee5bcddadb07db587bcb8d90873e05c8aae2f1bbfbaf5bbbfde19d3d066e8db->enter($__internal_5ee5bcddadb07db587bcb8d90873e05c8aae2f1bbfbaf5bbbfde19d3d066e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5ee5bcddadb07db587bcb8d90873e05c8aae2f1bbfbaf5bbbfde19d3d066e8db->leave($__internal_5ee5bcddadb07db587bcb8d90873e05c8aae2f1bbfbaf5bbbfde19d3d066e8db_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5e57235187425579a9e574e29c6fcc6ae917377587580ad6efc8f0b8afac8c4b = $this->env->getExtension("native_profiler");
        $__internal_5e57235187425579a9e574e29c6fcc6ae917377587580ad6efc8f0b8afac8c4b->enter($__internal_5e57235187425579a9e574e29c6fcc6ae917377587580ad6efc8f0b8afac8c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5e57235187425579a9e574e29c6fcc6ae917377587580ad6efc8f0b8afac8c4b->leave($__internal_5e57235187425579a9e574e29c6fcc6ae917377587580ad6efc8f0b8afac8c4b_prof);

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
