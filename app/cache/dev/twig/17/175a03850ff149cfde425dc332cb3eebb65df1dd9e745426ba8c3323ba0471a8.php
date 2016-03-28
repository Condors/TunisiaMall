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
        $__internal_68f3149dabd380cfc8eae729e64b729cc06c6d1687bc928cdff953fe9383b21a = $this->env->getExtension("native_profiler");
        $__internal_68f3149dabd380cfc8eae729e64b729cc06c6d1687bc928cdff953fe9383b21a->enter($__internal_68f3149dabd380cfc8eae729e64b729cc06c6d1687bc928cdff953fe9383b21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68f3149dabd380cfc8eae729e64b729cc06c6d1687bc928cdff953fe9383b21a->leave($__internal_68f3149dabd380cfc8eae729e64b729cc06c6d1687bc928cdff953fe9383b21a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_54ad9d6e2866f06b58da6a721b07bd5a6c677ce71847997326987e71e3713026 = $this->env->getExtension("native_profiler");
        $__internal_54ad9d6e2866f06b58da6a721b07bd5a6c677ce71847997326987e71e3713026->enter($__internal_54ad9d6e2866f06b58da6a721b07bd5a6c677ce71847997326987e71e3713026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_54ad9d6e2866f06b58da6a721b07bd5a6c677ce71847997326987e71e3713026->leave($__internal_54ad9d6e2866f06b58da6a721b07bd5a6c677ce71847997326987e71e3713026_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_56ffae78e287a4258c319cc08969e3ceb871f3ddb453dc772c0c14a51cf238ef = $this->env->getExtension("native_profiler");
        $__internal_56ffae78e287a4258c319cc08969e3ceb871f3ddb453dc772c0c14a51cf238ef->enter($__internal_56ffae78e287a4258c319cc08969e3ceb871f3ddb453dc772c0c14a51cf238ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56ffae78e287a4258c319cc08969e3ceb871f3ddb453dc772c0c14a51cf238ef->leave($__internal_56ffae78e287a4258c319cc08969e3ceb871f3ddb453dc772c0c14a51cf238ef_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0c239f217f1569cb6ca3ccef1eb56c0cba2671b6f7230815985cc87e1b803372 = $this->env->getExtension("native_profiler");
        $__internal_0c239f217f1569cb6ca3ccef1eb56c0cba2671b6f7230815985cc87e1b803372->enter($__internal_0c239f217f1569cb6ca3ccef1eb56c0cba2671b6f7230815985cc87e1b803372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0c239f217f1569cb6ca3ccef1eb56c0cba2671b6f7230815985cc87e1b803372->leave($__internal_0c239f217f1569cb6ca3ccef1eb56c0cba2671b6f7230815985cc87e1b803372_prof);

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
