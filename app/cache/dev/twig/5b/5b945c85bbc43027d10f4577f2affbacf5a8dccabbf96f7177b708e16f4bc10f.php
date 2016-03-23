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
        $__internal_18963d794c74de924eca9eece0bd6dbab41fa86d4b0b7faf290de9c0924683bb = $this->env->getExtension("native_profiler");
        $__internal_18963d794c74de924eca9eece0bd6dbab41fa86d4b0b7faf290de9c0924683bb->enter($__internal_18963d794c74de924eca9eece0bd6dbab41fa86d4b0b7faf290de9c0924683bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_18963d794c74de924eca9eece0bd6dbab41fa86d4b0b7faf290de9c0924683bb->leave($__internal_18963d794c74de924eca9eece0bd6dbab41fa86d4b0b7faf290de9c0924683bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f3658bfd5d2f7c7a7cc5cc2d3b8d71b5fac3015826550ea8b3df221d9c9dd473 = $this->env->getExtension("native_profiler");
        $__internal_f3658bfd5d2f7c7a7cc5cc2d3b8d71b5fac3015826550ea8b3df221d9c9dd473->enter($__internal_f3658bfd5d2f7c7a7cc5cc2d3b8d71b5fac3015826550ea8b3df221d9c9dd473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f3658bfd5d2f7c7a7cc5cc2d3b8d71b5fac3015826550ea8b3df221d9c9dd473->leave($__internal_f3658bfd5d2f7c7a7cc5cc2d3b8d71b5fac3015826550ea8b3df221d9c9dd473_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_20c8700833cde67fa2c5b874fec21134f8b78865dbdeb2485544545b110a47e3 = $this->env->getExtension("native_profiler");
        $__internal_20c8700833cde67fa2c5b874fec21134f8b78865dbdeb2485544545b110a47e3->enter($__internal_20c8700833cde67fa2c5b874fec21134f8b78865dbdeb2485544545b110a47e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_20c8700833cde67fa2c5b874fec21134f8b78865dbdeb2485544545b110a47e3->leave($__internal_20c8700833cde67fa2c5b874fec21134f8b78865dbdeb2485544545b110a47e3_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3495850cb1942e1ee53571761aa7072501dd315e2b6056c0f60e51b0d4d78829 = $this->env->getExtension("native_profiler");
        $__internal_3495850cb1942e1ee53571761aa7072501dd315e2b6056c0f60e51b0d4d78829->enter($__internal_3495850cb1942e1ee53571761aa7072501dd315e2b6056c0f60e51b0d4d78829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3495850cb1942e1ee53571761aa7072501dd315e2b6056c0f60e51b0d4d78829->leave($__internal_3495850cb1942e1ee53571761aa7072501dd315e2b6056c0f60e51b0d4d78829_prof);

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
