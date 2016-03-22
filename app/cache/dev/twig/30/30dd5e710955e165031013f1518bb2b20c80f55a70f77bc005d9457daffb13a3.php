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
        $__internal_e2473c1e5d62a04c4e59c11a6f43113d8a8d1848544f35c982ecc2a1c4ee9851 = $this->env->getExtension("native_profiler");
        $__internal_e2473c1e5d62a04c4e59c11a6f43113d8a8d1848544f35c982ecc2a1c4ee9851->enter($__internal_e2473c1e5d62a04c4e59c11a6f43113d8a8d1848544f35c982ecc2a1c4ee9851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e2473c1e5d62a04c4e59c11a6f43113d8a8d1848544f35c982ecc2a1c4ee9851->leave($__internal_e2473c1e5d62a04c4e59c11a6f43113d8a8d1848544f35c982ecc2a1c4ee9851_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_78a199a69981c08890482d856cf82341f396606eeef49d73d3ec6421a8f5c208 = $this->env->getExtension("native_profiler");
        $__internal_78a199a69981c08890482d856cf82341f396606eeef49d73d3ec6421a8f5c208->enter($__internal_78a199a69981c08890482d856cf82341f396606eeef49d73d3ec6421a8f5c208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78a199a69981c08890482d856cf82341f396606eeef49d73d3ec6421a8f5c208->leave($__internal_78a199a69981c08890482d856cf82341f396606eeef49d73d3ec6421a8f5c208_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a0f3bdae1fc05fd8ed4cdda36ceb608458269e1841e038e371f5b42fe2c7e783 = $this->env->getExtension("native_profiler");
        $__internal_a0f3bdae1fc05fd8ed4cdda36ceb608458269e1841e038e371f5b42fe2c7e783->enter($__internal_a0f3bdae1fc05fd8ed4cdda36ceb608458269e1841e038e371f5b42fe2c7e783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a0f3bdae1fc05fd8ed4cdda36ceb608458269e1841e038e371f5b42fe2c7e783->leave($__internal_a0f3bdae1fc05fd8ed4cdda36ceb608458269e1841e038e371f5b42fe2c7e783_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c042ad128d6681d02154acd1c5f4056cfaca30ee9b16a8ac7541a59aeac7b862 = $this->env->getExtension("native_profiler");
        $__internal_c042ad128d6681d02154acd1c5f4056cfaca30ee9b16a8ac7541a59aeac7b862->enter($__internal_c042ad128d6681d02154acd1c5f4056cfaca30ee9b16a8ac7541a59aeac7b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c042ad128d6681d02154acd1c5f4056cfaca30ee9b16a8ac7541a59aeac7b862->leave($__internal_c042ad128d6681d02154acd1c5f4056cfaca30ee9b16a8ac7541a59aeac7b862_prof);

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
