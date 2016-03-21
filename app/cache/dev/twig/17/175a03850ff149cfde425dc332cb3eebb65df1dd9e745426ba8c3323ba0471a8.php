<?php

/* FOSUserBundle:Registration:email.txt.twig */
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
        $__internal_924fdbc3800ebd1869503dc7984b9530e508c20eb07798c0344f21ef28b66d45 = $this->env->getExtension("native_profiler");
        $__internal_924fdbc3800ebd1869503dc7984b9530e508c20eb07798c0344f21ef28b66d45->enter($__internal_924fdbc3800ebd1869503dc7984b9530e508c20eb07798c0344f21ef28b66d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_924fdbc3800ebd1869503dc7984b9530e508c20eb07798c0344f21ef28b66d45->leave($__internal_924fdbc3800ebd1869503dc7984b9530e508c20eb07798c0344f21ef28b66d45_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bcad8a81e21b718ee1a3de7d4edff7f4f9477972e08ddd22b6f05fa9e58db977 = $this->env->getExtension("native_profiler");
        $__internal_bcad8a81e21b718ee1a3de7d4edff7f4f9477972e08ddd22b6f05fa9e58db977->enter($__internal_bcad8a81e21b718ee1a3de7d4edff7f4f9477972e08ddd22b6f05fa9e58db977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bcad8a81e21b718ee1a3de7d4edff7f4f9477972e08ddd22b6f05fa9e58db977->leave($__internal_bcad8a81e21b718ee1a3de7d4edff7f4f9477972e08ddd22b6f05fa9e58db977_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_91a5d7e41c084ff2de2a55144fe3ccb54d69dcbcf16bf09e02ee86a38ed30954 = $this->env->getExtension("native_profiler");
        $__internal_91a5d7e41c084ff2de2a55144fe3ccb54d69dcbcf16bf09e02ee86a38ed30954->enter($__internal_91a5d7e41c084ff2de2a55144fe3ccb54d69dcbcf16bf09e02ee86a38ed30954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_91a5d7e41c084ff2de2a55144fe3ccb54d69dcbcf16bf09e02ee86a38ed30954->leave($__internal_91a5d7e41c084ff2de2a55144fe3ccb54d69dcbcf16bf09e02ee86a38ed30954_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b4dbf18602f0f4fed7451374522c9d52924145407a25a51d6740032439fbb58b = $this->env->getExtension("native_profiler");
        $__internal_b4dbf18602f0f4fed7451374522c9d52924145407a25a51d6740032439fbb58b->enter($__internal_b4dbf18602f0f4fed7451374522c9d52924145407a25a51d6740032439fbb58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b4dbf18602f0f4fed7451374522c9d52924145407a25a51d6740032439fbb58b->leave($__internal_b4dbf18602f0f4fed7451374522c9d52924145407a25a51d6740032439fbb58b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
