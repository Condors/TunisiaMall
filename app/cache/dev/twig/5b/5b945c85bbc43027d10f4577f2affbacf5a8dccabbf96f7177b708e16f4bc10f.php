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
        $__internal_30effa4a3087020ff7cbd42994a383419a9594e0e6370ad462827fe1ba8feb5c = $this->env->getExtension("native_profiler");
        $__internal_30effa4a3087020ff7cbd42994a383419a9594e0e6370ad462827fe1ba8feb5c->enter($__internal_30effa4a3087020ff7cbd42994a383419a9594e0e6370ad462827fe1ba8feb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_30effa4a3087020ff7cbd42994a383419a9594e0e6370ad462827fe1ba8feb5c->leave($__internal_30effa4a3087020ff7cbd42994a383419a9594e0e6370ad462827fe1ba8feb5c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8c9ab49e92addccf6d940a71992c92c9b74afffe06488a81076593a116988c7 = $this->env->getExtension("native_profiler");
        $__internal_e8c9ab49e92addccf6d940a71992c92c9b74afffe06488a81076593a116988c7->enter($__internal_e8c9ab49e92addccf6d940a71992c92c9b74afffe06488a81076593a116988c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8c9ab49e92addccf6d940a71992c92c9b74afffe06488a81076593a116988c7->leave($__internal_e8c9ab49e92addccf6d940a71992c92c9b74afffe06488a81076593a116988c7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d8eb1d7bd85fbc726ed0301bf774058e4edf19b5309c7d3bf9e55604b6ba4daa = $this->env->getExtension("native_profiler");
        $__internal_d8eb1d7bd85fbc726ed0301bf774058e4edf19b5309c7d3bf9e55604b6ba4daa->enter($__internal_d8eb1d7bd85fbc726ed0301bf774058e4edf19b5309c7d3bf9e55604b6ba4daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d8eb1d7bd85fbc726ed0301bf774058e4edf19b5309c7d3bf9e55604b6ba4daa->leave($__internal_d8eb1d7bd85fbc726ed0301bf774058e4edf19b5309c7d3bf9e55604b6ba4daa_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43eb6df1b4b35f8be46f05a83d6be80b7ee6e6c892342fb83b7e18a5291796f6 = $this->env->getExtension("native_profiler");
        $__internal_43eb6df1b4b35f8be46f05a83d6be80b7ee6e6c892342fb83b7e18a5291796f6->enter($__internal_43eb6df1b4b35f8be46f05a83d6be80b7ee6e6c892342fb83b7e18a5291796f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_43eb6df1b4b35f8be46f05a83d6be80b7ee6e6c892342fb83b7e18a5291796f6->leave($__internal_43eb6df1b4b35f8be46f05a83d6be80b7ee6e6c892342fb83b7e18a5291796f6_prof);

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
