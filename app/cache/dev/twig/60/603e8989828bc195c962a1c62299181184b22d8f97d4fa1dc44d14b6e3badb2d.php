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
        $__internal_af1076fca7ae77c3a4d986fe3211d4948f1ed8e6db0894ae4ad43417eee0e1c0 = $this->env->getExtension("native_profiler");
        $__internal_af1076fca7ae77c3a4d986fe3211d4948f1ed8e6db0894ae4ad43417eee0e1c0->enter($__internal_af1076fca7ae77c3a4d986fe3211d4948f1ed8e6db0894ae4ad43417eee0e1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_af1076fca7ae77c3a4d986fe3211d4948f1ed8e6db0894ae4ad43417eee0e1c0->leave($__internal_af1076fca7ae77c3a4d986fe3211d4948f1ed8e6db0894ae4ad43417eee0e1c0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7bec8af20c54cc4b3a4a707f7e573bbb0ed84e8f8f993f900f8a93a6476229c8 = $this->env->getExtension("native_profiler");
        $__internal_7bec8af20c54cc4b3a4a707f7e573bbb0ed84e8f8f993f900f8a93a6476229c8->enter($__internal_7bec8af20c54cc4b3a4a707f7e573bbb0ed84e8f8f993f900f8a93a6476229c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7bec8af20c54cc4b3a4a707f7e573bbb0ed84e8f8f993f900f8a93a6476229c8->leave($__internal_7bec8af20c54cc4b3a4a707f7e573bbb0ed84e8f8f993f900f8a93a6476229c8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dd96f63839b3699d2f2853fb63540123f4007e0beaf7676a08b68ce585cf45ff = $this->env->getExtension("native_profiler");
        $__internal_dd96f63839b3699d2f2853fb63540123f4007e0beaf7676a08b68ce585cf45ff->enter($__internal_dd96f63839b3699d2f2853fb63540123f4007e0beaf7676a08b68ce585cf45ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dd96f63839b3699d2f2853fb63540123f4007e0beaf7676a08b68ce585cf45ff->leave($__internal_dd96f63839b3699d2f2853fb63540123f4007e0beaf7676a08b68ce585cf45ff_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b985739f60f9a042d17d1ee670629c4b7421d27aeb45794d3a62f6497801df0e = $this->env->getExtension("native_profiler");
        $__internal_b985739f60f9a042d17d1ee670629c4b7421d27aeb45794d3a62f6497801df0e->enter($__internal_b985739f60f9a042d17d1ee670629c4b7421d27aeb45794d3a62f6497801df0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b985739f60f9a042d17d1ee670629c4b7421d27aeb45794d3a62f6497801df0e->leave($__internal_b985739f60f9a042d17d1ee670629c4b7421d27aeb45794d3a62f6497801df0e_prof);

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
