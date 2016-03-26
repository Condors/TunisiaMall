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
        $__internal_3b0ac6e43cfa0313c53ba5fa074dfb67ca00106c4a1a2addb6b24924c30d7f81 = $this->env->getExtension("native_profiler");
        $__internal_3b0ac6e43cfa0313c53ba5fa074dfb67ca00106c4a1a2addb6b24924c30d7f81->enter($__internal_3b0ac6e43cfa0313c53ba5fa074dfb67ca00106c4a1a2addb6b24924c30d7f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3b0ac6e43cfa0313c53ba5fa074dfb67ca00106c4a1a2addb6b24924c30d7f81->leave($__internal_3b0ac6e43cfa0313c53ba5fa074dfb67ca00106c4a1a2addb6b24924c30d7f81_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bae2ef056108a68687d20a29b9dc83c29e0f34cb6e8b85c8b3e279f1636687e2 = $this->env->getExtension("native_profiler");
        $__internal_bae2ef056108a68687d20a29b9dc83c29e0f34cb6e8b85c8b3e279f1636687e2->enter($__internal_bae2ef056108a68687d20a29b9dc83c29e0f34cb6e8b85c8b3e279f1636687e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bae2ef056108a68687d20a29b9dc83c29e0f34cb6e8b85c8b3e279f1636687e2->leave($__internal_bae2ef056108a68687d20a29b9dc83c29e0f34cb6e8b85c8b3e279f1636687e2_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_31fb269f1f808c1fc4fc8a58a1de01a51895bcc900ada50ecf193bcec0e8d525 = $this->env->getExtension("native_profiler");
        $__internal_31fb269f1f808c1fc4fc8a58a1de01a51895bcc900ada50ecf193bcec0e8d525->enter($__internal_31fb269f1f808c1fc4fc8a58a1de01a51895bcc900ada50ecf193bcec0e8d525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_31fb269f1f808c1fc4fc8a58a1de01a51895bcc900ada50ecf193bcec0e8d525->leave($__internal_31fb269f1f808c1fc4fc8a58a1de01a51895bcc900ada50ecf193bcec0e8d525_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6c893281d17d59b854d43cb97d2f04b69c966b47752dbcbb3f3bfd7e509595d = $this->env->getExtension("native_profiler");
        $__internal_b6c893281d17d59b854d43cb97d2f04b69c966b47752dbcbb3f3bfd7e509595d->enter($__internal_b6c893281d17d59b854d43cb97d2f04b69c966b47752dbcbb3f3bfd7e509595d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6c893281d17d59b854d43cb97d2f04b69c966b47752dbcbb3f3bfd7e509595d->leave($__internal_b6c893281d17d59b854d43cb97d2f04b69c966b47752dbcbb3f3bfd7e509595d_prof);

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
