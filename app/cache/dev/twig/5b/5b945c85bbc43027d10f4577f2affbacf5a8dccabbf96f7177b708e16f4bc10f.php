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
        $__internal_3343a5443e2fc3a7f16659f4213336d822b9b274ae35af09406f604d56055d48 = $this->env->getExtension("native_profiler");
        $__internal_3343a5443e2fc3a7f16659f4213336d822b9b274ae35af09406f604d56055d48->enter($__internal_3343a5443e2fc3a7f16659f4213336d822b9b274ae35af09406f604d56055d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3343a5443e2fc3a7f16659f4213336d822b9b274ae35af09406f604d56055d48->leave($__internal_3343a5443e2fc3a7f16659f4213336d822b9b274ae35af09406f604d56055d48_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_91f6481cf56db7d624cb194bea4f402d8dbda1b5f582b17c52919a4162c21e3f = $this->env->getExtension("native_profiler");
        $__internal_91f6481cf56db7d624cb194bea4f402d8dbda1b5f582b17c52919a4162c21e3f->enter($__internal_91f6481cf56db7d624cb194bea4f402d8dbda1b5f582b17c52919a4162c21e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_91f6481cf56db7d624cb194bea4f402d8dbda1b5f582b17c52919a4162c21e3f->leave($__internal_91f6481cf56db7d624cb194bea4f402d8dbda1b5f582b17c52919a4162c21e3f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ad2dc52fcf74c640ced4f144e99f1a5bde0880a3f6426efb86dc8d1522c271a8 = $this->env->getExtension("native_profiler");
        $__internal_ad2dc52fcf74c640ced4f144e99f1a5bde0880a3f6426efb86dc8d1522c271a8->enter($__internal_ad2dc52fcf74c640ced4f144e99f1a5bde0880a3f6426efb86dc8d1522c271a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ad2dc52fcf74c640ced4f144e99f1a5bde0880a3f6426efb86dc8d1522c271a8->leave($__internal_ad2dc52fcf74c640ced4f144e99f1a5bde0880a3f6426efb86dc8d1522c271a8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c2d9315a59449a23d18ae31cd16f78a3e38883bd5ed971daab3ac54c0f9451b2 = $this->env->getExtension("native_profiler");
        $__internal_c2d9315a59449a23d18ae31cd16f78a3e38883bd5ed971daab3ac54c0f9451b2->enter($__internal_c2d9315a59449a23d18ae31cd16f78a3e38883bd5ed971daab3ac54c0f9451b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c2d9315a59449a23d18ae31cd16f78a3e38883bd5ed971daab3ac54c0f9451b2->leave($__internal_c2d9315a59449a23d18ae31cd16f78a3e38883bd5ed971daab3ac54c0f9451b2_prof);

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
