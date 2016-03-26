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
        $__internal_c50acc60c2955d63e370a78367cea94a8ef2bae9856764a73aa66684ecf191aa = $this->env->getExtension("native_profiler");
        $__internal_c50acc60c2955d63e370a78367cea94a8ef2bae9856764a73aa66684ecf191aa->enter($__internal_c50acc60c2955d63e370a78367cea94a8ef2bae9856764a73aa66684ecf191aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c50acc60c2955d63e370a78367cea94a8ef2bae9856764a73aa66684ecf191aa->leave($__internal_c50acc60c2955d63e370a78367cea94a8ef2bae9856764a73aa66684ecf191aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_558121b91b45a92273dbc3e6776b6f7fb062373cb598683860606afd38d19635 = $this->env->getExtension("native_profiler");
        $__internal_558121b91b45a92273dbc3e6776b6f7fb062373cb598683860606afd38d19635->enter($__internal_558121b91b45a92273dbc3e6776b6f7fb062373cb598683860606afd38d19635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_558121b91b45a92273dbc3e6776b6f7fb062373cb598683860606afd38d19635->leave($__internal_558121b91b45a92273dbc3e6776b6f7fb062373cb598683860606afd38d19635_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ce4e25c50029ff25f489ac4e27f9a8cf24ebcce1d04e408a447c12df7f1e6b5d = $this->env->getExtension("native_profiler");
        $__internal_ce4e25c50029ff25f489ac4e27f9a8cf24ebcce1d04e408a447c12df7f1e6b5d->enter($__internal_ce4e25c50029ff25f489ac4e27f9a8cf24ebcce1d04e408a447c12df7f1e6b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ce4e25c50029ff25f489ac4e27f9a8cf24ebcce1d04e408a447c12df7f1e6b5d->leave($__internal_ce4e25c50029ff25f489ac4e27f9a8cf24ebcce1d04e408a447c12df7f1e6b5d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a06e7a59e586f69c9da18da115ff555702222c3c617bdf5143fa003764569a28 = $this->env->getExtension("native_profiler");
        $__internal_a06e7a59e586f69c9da18da115ff555702222c3c617bdf5143fa003764569a28->enter($__internal_a06e7a59e586f69c9da18da115ff555702222c3c617bdf5143fa003764569a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a06e7a59e586f69c9da18da115ff555702222c3c617bdf5143fa003764569a28->leave($__internal_a06e7a59e586f69c9da18da115ff555702222c3c617bdf5143fa003764569a28_prof);

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
