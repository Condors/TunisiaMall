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
        $__internal_d10be8d5686be6e7a4631f9821c0ab67cecc550e03371d40d24a7f42bec95251 = $this->env->getExtension("native_profiler");
        $__internal_d10be8d5686be6e7a4631f9821c0ab67cecc550e03371d40d24a7f42bec95251->enter($__internal_d10be8d5686be6e7a4631f9821c0ab67cecc550e03371d40d24a7f42bec95251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d10be8d5686be6e7a4631f9821c0ab67cecc550e03371d40d24a7f42bec95251->leave($__internal_d10be8d5686be6e7a4631f9821c0ab67cecc550e03371d40d24a7f42bec95251_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_84891ab6b55ebd505dca7fc97e116b5cf6f5205ba0e588a1bb6d4896270a7639 = $this->env->getExtension("native_profiler");
        $__internal_84891ab6b55ebd505dca7fc97e116b5cf6f5205ba0e588a1bb6d4896270a7639->enter($__internal_84891ab6b55ebd505dca7fc97e116b5cf6f5205ba0e588a1bb6d4896270a7639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_84891ab6b55ebd505dca7fc97e116b5cf6f5205ba0e588a1bb6d4896270a7639->leave($__internal_84891ab6b55ebd505dca7fc97e116b5cf6f5205ba0e588a1bb6d4896270a7639_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b97ed3bb4ec462a1647bdd8ac9eec8cfc1d5c4db1b8fc2b20c7e638105638dd1 = $this->env->getExtension("native_profiler");
        $__internal_b97ed3bb4ec462a1647bdd8ac9eec8cfc1d5c4db1b8fc2b20c7e638105638dd1->enter($__internal_b97ed3bb4ec462a1647bdd8ac9eec8cfc1d5c4db1b8fc2b20c7e638105638dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b97ed3bb4ec462a1647bdd8ac9eec8cfc1d5c4db1b8fc2b20c7e638105638dd1->leave($__internal_b97ed3bb4ec462a1647bdd8ac9eec8cfc1d5c4db1b8fc2b20c7e638105638dd1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e33e0c861b5929325df2ad02be36a062ef835b1b445844252303cea61c30be9b = $this->env->getExtension("native_profiler");
        $__internal_e33e0c861b5929325df2ad02be36a062ef835b1b445844252303cea61c30be9b->enter($__internal_e33e0c861b5929325df2ad02be36a062ef835b1b445844252303cea61c30be9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e33e0c861b5929325df2ad02be36a062ef835b1b445844252303cea61c30be9b->leave($__internal_e33e0c861b5929325df2ad02be36a062ef835b1b445844252303cea61c30be9b_prof);

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
