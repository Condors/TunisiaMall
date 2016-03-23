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
        $__internal_28dc396dbe079b91d082301cf12a1b794ffbbbe2a5130e030386f8e2edbd98f5 = $this->env->getExtension("native_profiler");
        $__internal_28dc396dbe079b91d082301cf12a1b794ffbbbe2a5130e030386f8e2edbd98f5->enter($__internal_28dc396dbe079b91d082301cf12a1b794ffbbbe2a5130e030386f8e2edbd98f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_28dc396dbe079b91d082301cf12a1b794ffbbbe2a5130e030386f8e2edbd98f5->leave($__internal_28dc396dbe079b91d082301cf12a1b794ffbbbe2a5130e030386f8e2edbd98f5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8243e7f05ca0599b6e00f2176e4a0efe1f7061bc0db3221b170a257882920372 = $this->env->getExtension("native_profiler");
        $__internal_8243e7f05ca0599b6e00f2176e4a0efe1f7061bc0db3221b170a257882920372->enter($__internal_8243e7f05ca0599b6e00f2176e4a0efe1f7061bc0db3221b170a257882920372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8243e7f05ca0599b6e00f2176e4a0efe1f7061bc0db3221b170a257882920372->leave($__internal_8243e7f05ca0599b6e00f2176e4a0efe1f7061bc0db3221b170a257882920372_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3718d465de0e01084618d181ae06671a2536d946943463941b2d139747e18a41 = $this->env->getExtension("native_profiler");
        $__internal_3718d465de0e01084618d181ae06671a2536d946943463941b2d139747e18a41->enter($__internal_3718d465de0e01084618d181ae06671a2536d946943463941b2d139747e18a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3718d465de0e01084618d181ae06671a2536d946943463941b2d139747e18a41->leave($__internal_3718d465de0e01084618d181ae06671a2536d946943463941b2d139747e18a41_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_28e6b44722b88fbce602806c58db069636cad36bcce2b60be8f6deab8f7f3761 = $this->env->getExtension("native_profiler");
        $__internal_28e6b44722b88fbce602806c58db069636cad36bcce2b60be8f6deab8f7f3761->enter($__internal_28e6b44722b88fbce602806c58db069636cad36bcce2b60be8f6deab8f7f3761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_28e6b44722b88fbce602806c58db069636cad36bcce2b60be8f6deab8f7f3761->leave($__internal_28e6b44722b88fbce602806c58db069636cad36bcce2b60be8f6deab8f7f3761_prof);

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
