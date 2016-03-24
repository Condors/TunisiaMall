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
        $__internal_9297ebb3517522d4dc1e80a7ee73ad3c6d145f4d84ead7087e3a84893676098a = $this->env->getExtension("native_profiler");
        $__internal_9297ebb3517522d4dc1e80a7ee73ad3c6d145f4d84ead7087e3a84893676098a->enter($__internal_9297ebb3517522d4dc1e80a7ee73ad3c6d145f4d84ead7087e3a84893676098a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9297ebb3517522d4dc1e80a7ee73ad3c6d145f4d84ead7087e3a84893676098a->leave($__internal_9297ebb3517522d4dc1e80a7ee73ad3c6d145f4d84ead7087e3a84893676098a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5e626a2491b62e6c8ffd749b4048c0d5dc84cafedff7fc9e985c45ef9d47db28 = $this->env->getExtension("native_profiler");
        $__internal_5e626a2491b62e6c8ffd749b4048c0d5dc84cafedff7fc9e985c45ef9d47db28->enter($__internal_5e626a2491b62e6c8ffd749b4048c0d5dc84cafedff7fc9e985c45ef9d47db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e626a2491b62e6c8ffd749b4048c0d5dc84cafedff7fc9e985c45ef9d47db28->leave($__internal_5e626a2491b62e6c8ffd749b4048c0d5dc84cafedff7fc9e985c45ef9d47db28_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b26635240fc757b8454ebedbb6d1c28f5102c04d2c08e00ced964690a608e384 = $this->env->getExtension("native_profiler");
        $__internal_b26635240fc757b8454ebedbb6d1c28f5102c04d2c08e00ced964690a608e384->enter($__internal_b26635240fc757b8454ebedbb6d1c28f5102c04d2c08e00ced964690a608e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b26635240fc757b8454ebedbb6d1c28f5102c04d2c08e00ced964690a608e384->leave($__internal_b26635240fc757b8454ebedbb6d1c28f5102c04d2c08e00ced964690a608e384_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fd8ad0cf5b681d15c35b650b810dfe8f348aa3e08f983bad031aea08a4a0c7f7 = $this->env->getExtension("native_profiler");
        $__internal_fd8ad0cf5b681d15c35b650b810dfe8f348aa3e08f983bad031aea08a4a0c7f7->enter($__internal_fd8ad0cf5b681d15c35b650b810dfe8f348aa3e08f983bad031aea08a4a0c7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fd8ad0cf5b681d15c35b650b810dfe8f348aa3e08f983bad031aea08a4a0c7f7->leave($__internal_fd8ad0cf5b681d15c35b650b810dfe8f348aa3e08f983bad031aea08a4a0c7f7_prof);

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
