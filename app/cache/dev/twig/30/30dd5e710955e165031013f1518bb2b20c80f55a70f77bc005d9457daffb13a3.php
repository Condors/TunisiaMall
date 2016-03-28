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
        $__internal_f7676eeadc691735503a94cf821969d4ed83ceae59801b9127c73d1e71de7655 = $this->env->getExtension("native_profiler");
        $__internal_f7676eeadc691735503a94cf821969d4ed83ceae59801b9127c73d1e71de7655->enter($__internal_f7676eeadc691735503a94cf821969d4ed83ceae59801b9127c73d1e71de7655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f7676eeadc691735503a94cf821969d4ed83ceae59801b9127c73d1e71de7655->leave($__internal_f7676eeadc691735503a94cf821969d4ed83ceae59801b9127c73d1e71de7655_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_42aba020ef20836e17709fa8f69af8c016f8b0a307c1c7949e7f41acdc49da33 = $this->env->getExtension("native_profiler");
        $__internal_42aba020ef20836e17709fa8f69af8c016f8b0a307c1c7949e7f41acdc49da33->enter($__internal_42aba020ef20836e17709fa8f69af8c016f8b0a307c1c7949e7f41acdc49da33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_42aba020ef20836e17709fa8f69af8c016f8b0a307c1c7949e7f41acdc49da33->leave($__internal_42aba020ef20836e17709fa8f69af8c016f8b0a307c1c7949e7f41acdc49da33_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_81973d2d31839b4f5fb125afc6fd706b32d40b56e5904b82857e85f5ac38aeca = $this->env->getExtension("native_profiler");
        $__internal_81973d2d31839b4f5fb125afc6fd706b32d40b56e5904b82857e85f5ac38aeca->enter($__internal_81973d2d31839b4f5fb125afc6fd706b32d40b56e5904b82857e85f5ac38aeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_81973d2d31839b4f5fb125afc6fd706b32d40b56e5904b82857e85f5ac38aeca->leave($__internal_81973d2d31839b4f5fb125afc6fd706b32d40b56e5904b82857e85f5ac38aeca_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9bb8a5e9745588f7a6501c1ce2d03074605864afa6a4b747f9d38c954ef47f3e = $this->env->getExtension("native_profiler");
        $__internal_9bb8a5e9745588f7a6501c1ce2d03074605864afa6a4b747f9d38c954ef47f3e->enter($__internal_9bb8a5e9745588f7a6501c1ce2d03074605864afa6a4b747f9d38c954ef47f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9bb8a5e9745588f7a6501c1ce2d03074605864afa6a4b747f9d38c954ef47f3e->leave($__internal_9bb8a5e9745588f7a6501c1ce2d03074605864afa6a4b747f9d38c954ef47f3e_prof);

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
