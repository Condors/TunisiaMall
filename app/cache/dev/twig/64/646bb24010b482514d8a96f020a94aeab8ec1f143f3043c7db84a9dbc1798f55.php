<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ae438da3382a156c5d23afb1a814a215f8dd0b0a6ace1b35fd53ec223414405f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e5d2cc977d2548f0a3c5641b1ea9a1e063854fe71439cab451b51e7a085cc3 = $this->env->getExtension("native_profiler");
        $__internal_18e5d2cc977d2548f0a3c5641b1ea9a1e063854fe71439cab451b51e7a085cc3->enter($__internal_18e5d2cc977d2548f0a3c5641b1ea9a1e063854fe71439cab451b51e7a085cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_18e5d2cc977d2548f0a3c5641b1ea9a1e063854fe71439cab451b51e7a085cc3->leave($__internal_18e5d2cc977d2548f0a3c5641b1ea9a1e063854fe71439cab451b51e7a085cc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
