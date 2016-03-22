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
        $__internal_f6ae8f958c700f4fce5399bde3d714d029fc617aa57abf376d46677b5b4499b4 = $this->env->getExtension("native_profiler");
        $__internal_f6ae8f958c700f4fce5399bde3d714d029fc617aa57abf376d46677b5b4499b4->enter($__internal_f6ae8f958c700f4fce5399bde3d714d029fc617aa57abf376d46677b5b4499b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f6ae8f958c700f4fce5399bde3d714d029fc617aa57abf376d46677b5b4499b4->leave($__internal_f6ae8f958c700f4fce5399bde3d714d029fc617aa57abf376d46677b5b4499b4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9a0a4309c0fe15b4dbbea2506a96494267bc542059271826c9fbb8975a2445c6 = $this->env->getExtension("native_profiler");
        $__internal_9a0a4309c0fe15b4dbbea2506a96494267bc542059271826c9fbb8975a2445c6->enter($__internal_9a0a4309c0fe15b4dbbea2506a96494267bc542059271826c9fbb8975a2445c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9a0a4309c0fe15b4dbbea2506a96494267bc542059271826c9fbb8975a2445c6->leave($__internal_9a0a4309c0fe15b4dbbea2506a96494267bc542059271826c9fbb8975a2445c6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_84588772108bdb4f9ca9785f8f30dc6aef9a6309dd2f36541247fb18f9e7a4d2 = $this->env->getExtension("native_profiler");
        $__internal_84588772108bdb4f9ca9785f8f30dc6aef9a6309dd2f36541247fb18f9e7a4d2->enter($__internal_84588772108bdb4f9ca9785f8f30dc6aef9a6309dd2f36541247fb18f9e7a4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_84588772108bdb4f9ca9785f8f30dc6aef9a6309dd2f36541247fb18f9e7a4d2->leave($__internal_84588772108bdb4f9ca9785f8f30dc6aef9a6309dd2f36541247fb18f9e7a4d2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ac8be6099a4fc10231ae34eabe6ec46c8896a1a17f5c61744f75f660f440b5a4 = $this->env->getExtension("native_profiler");
        $__internal_ac8be6099a4fc10231ae34eabe6ec46c8896a1a17f5c61744f75f660f440b5a4->enter($__internal_ac8be6099a4fc10231ae34eabe6ec46c8896a1a17f5c61744f75f660f440b5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ac8be6099a4fc10231ae34eabe6ec46c8896a1a17f5c61744f75f660f440b5a4->leave($__internal_ac8be6099a4fc10231ae34eabe6ec46c8896a1a17f5c61744f75f660f440b5a4_prof);

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
