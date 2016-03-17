<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f54303e5c56cabd339f77fd8488e9d423a7e36fb20564af58ace7890ebf0551a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01f075e120719d7582db3f8819dc4d05ff266ef799459b8409b84eabb6b33547 = $this->env->getExtension("native_profiler");
        $__internal_01f075e120719d7582db3f8819dc4d05ff266ef799459b8409b84eabb6b33547->enter($__internal_01f075e120719d7582db3f8819dc4d05ff266ef799459b8409b84eabb6b33547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f075e120719d7582db3f8819dc4d05ff266ef799459b8409b84eabb6b33547->leave($__internal_01f075e120719d7582db3f8819dc4d05ff266ef799459b8409b84eabb6b33547_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e243329ac2710c2472e56478b11289c3485d1c9181eb364cb059b90a6fe3e631 = $this->env->getExtension("native_profiler");
        $__internal_e243329ac2710c2472e56478b11289c3485d1c9181eb364cb059b90a6fe3e631->enter($__internal_e243329ac2710c2472e56478b11289c3485d1c9181eb364cb059b90a6fe3e631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e243329ac2710c2472e56478b11289c3485d1c9181eb364cb059b90a6fe3e631->leave($__internal_e243329ac2710c2472e56478b11289c3485d1c9181eb364cb059b90a6fe3e631_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c47f3dd2c830bda61f12a533f4d6448d507b20e8ba8beb769505e1ed91efc7ed = $this->env->getExtension("native_profiler");
        $__internal_c47f3dd2c830bda61f12a533f4d6448d507b20e8ba8beb769505e1ed91efc7ed->enter($__internal_c47f3dd2c830bda61f12a533f4d6448d507b20e8ba8beb769505e1ed91efc7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c47f3dd2c830bda61f12a533f4d6448d507b20e8ba8beb769505e1ed91efc7ed->leave($__internal_c47f3dd2c830bda61f12a533f4d6448d507b20e8ba8beb769505e1ed91efc7ed_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29bbd5ded2116df10cfbb00d6cdef843131a209e301c4bc949e3a9993ecc9438 = $this->env->getExtension("native_profiler");
        $__internal_29bbd5ded2116df10cfbb00d6cdef843131a209e301c4bc949e3a9993ecc9438->enter($__internal_29bbd5ded2116df10cfbb00d6cdef843131a209e301c4bc949e3a9993ecc9438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_29bbd5ded2116df10cfbb00d6cdef843131a209e301c4bc949e3a9993ecc9438->leave($__internal_29bbd5ded2116df10cfbb00d6cdef843131a209e301c4bc949e3a9993ecc9438_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
