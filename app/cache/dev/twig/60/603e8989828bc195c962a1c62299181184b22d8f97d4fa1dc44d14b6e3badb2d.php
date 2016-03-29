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
        $__internal_7b93880b2ea11286b258c6957c9f6584313d5e92bb86d63d22683a48b7e89091 = $this->env->getExtension("native_profiler");
        $__internal_7b93880b2ea11286b258c6957c9f6584313d5e92bb86d63d22683a48b7e89091->enter($__internal_7b93880b2ea11286b258c6957c9f6584313d5e92bb86d63d22683a48b7e89091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7b93880b2ea11286b258c6957c9f6584313d5e92bb86d63d22683a48b7e89091->leave($__internal_7b93880b2ea11286b258c6957c9f6584313d5e92bb86d63d22683a48b7e89091_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4b64f334678dd50c0add8aa921e704483c6b09951fdda77827c0c78bafe10a96 = $this->env->getExtension("native_profiler");
        $__internal_4b64f334678dd50c0add8aa921e704483c6b09951fdda77827c0c78bafe10a96->enter($__internal_4b64f334678dd50c0add8aa921e704483c6b09951fdda77827c0c78bafe10a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4b64f334678dd50c0add8aa921e704483c6b09951fdda77827c0c78bafe10a96->leave($__internal_4b64f334678dd50c0add8aa921e704483c6b09951fdda77827c0c78bafe10a96_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f057439c2f3c40cf23c2da4f7579eb788bf64d6987ac2e858bd8f46f1973c8a0 = $this->env->getExtension("native_profiler");
        $__internal_f057439c2f3c40cf23c2da4f7579eb788bf64d6987ac2e858bd8f46f1973c8a0->enter($__internal_f057439c2f3c40cf23c2da4f7579eb788bf64d6987ac2e858bd8f46f1973c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f057439c2f3c40cf23c2da4f7579eb788bf64d6987ac2e858bd8f46f1973c8a0->leave($__internal_f057439c2f3c40cf23c2da4f7579eb788bf64d6987ac2e858bd8f46f1973c8a0_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_06c6dbd88afcf01e3a52241654a696abe20deb087bbee2e4d4875050c5ccca60 = $this->env->getExtension("native_profiler");
        $__internal_06c6dbd88afcf01e3a52241654a696abe20deb087bbee2e4d4875050c5ccca60->enter($__internal_06c6dbd88afcf01e3a52241654a696abe20deb087bbee2e4d4875050c5ccca60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_06c6dbd88afcf01e3a52241654a696abe20deb087bbee2e4d4875050c5ccca60->leave($__internal_06c6dbd88afcf01e3a52241654a696abe20deb087bbee2e4d4875050c5ccca60_prof);

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
