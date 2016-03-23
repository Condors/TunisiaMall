<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6351d63da473e69807c0ff28cacc81f01da114b421ad8f9992e3c34941c533eb extends Twig_Template
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
        $__internal_af147f330196559fc41173f5933ac87d9ed030c3b89162518c9ad369723eb6ec = $this->env->getExtension("native_profiler");
        $__internal_af147f330196559fc41173f5933ac87d9ed030c3b89162518c9ad369723eb6ec->enter($__internal_af147f330196559fc41173f5933ac87d9ed030c3b89162518c9ad369723eb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_af147f330196559fc41173f5933ac87d9ed030c3b89162518c9ad369723eb6ec->leave($__internal_af147f330196559fc41173f5933ac87d9ed030c3b89162518c9ad369723eb6ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f0c24ece00bb6c15161a6cd48d80bf00a126101473657ac41fa2f896cff72f75 = $this->env->getExtension("native_profiler");
        $__internal_f0c24ece00bb6c15161a6cd48d80bf00a126101473657ac41fa2f896cff72f75->enter($__internal_f0c24ece00bb6c15161a6cd48d80bf00a126101473657ac41fa2f896cff72f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f0c24ece00bb6c15161a6cd48d80bf00a126101473657ac41fa2f896cff72f75->leave($__internal_f0c24ece00bb6c15161a6cd48d80bf00a126101473657ac41fa2f896cff72f75_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e39d05798addc327875dc3e68f46dfb92758f992941640b443733799ac10a4b = $this->env->getExtension("native_profiler");
        $__internal_8e39d05798addc327875dc3e68f46dfb92758f992941640b443733799ac10a4b->enter($__internal_8e39d05798addc327875dc3e68f46dfb92758f992941640b443733799ac10a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8e39d05798addc327875dc3e68f46dfb92758f992941640b443733799ac10a4b->leave($__internal_8e39d05798addc327875dc3e68f46dfb92758f992941640b443733799ac10a4b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_55bc0404b71b2c466dd66efceb9f620d74169eabca737384fde765f0bf7b506f = $this->env->getExtension("native_profiler");
        $__internal_55bc0404b71b2c466dd66efceb9f620d74169eabca737384fde765f0bf7b506f->enter($__internal_55bc0404b71b2c466dd66efceb9f620d74169eabca737384fde765f0bf7b506f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_55bc0404b71b2c466dd66efceb9f620d74169eabca737384fde765f0bf7b506f->leave($__internal_55bc0404b71b2c466dd66efceb9f620d74169eabca737384fde765f0bf7b506f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
