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
        $__internal_0b8ebc1ae96d885a94ea78c5c8b0062b65de4f53cd43c70c4f2666d5d239cd96 = $this->env->getExtension("native_profiler");
        $__internal_0b8ebc1ae96d885a94ea78c5c8b0062b65de4f53cd43c70c4f2666d5d239cd96->enter($__internal_0b8ebc1ae96d885a94ea78c5c8b0062b65de4f53cd43c70c4f2666d5d239cd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8ebc1ae96d885a94ea78c5c8b0062b65de4f53cd43c70c4f2666d5d239cd96->leave($__internal_0b8ebc1ae96d885a94ea78c5c8b0062b65de4f53cd43c70c4f2666d5d239cd96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abcd3b742c6a3c23095afafd65125a236d35f930a977783222a35e1495abca36 = $this->env->getExtension("native_profiler");
        $__internal_abcd3b742c6a3c23095afafd65125a236d35f930a977783222a35e1495abca36->enter($__internal_abcd3b742c6a3c23095afafd65125a236d35f930a977783222a35e1495abca36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_abcd3b742c6a3c23095afafd65125a236d35f930a977783222a35e1495abca36->leave($__internal_abcd3b742c6a3c23095afafd65125a236d35f930a977783222a35e1495abca36_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_814705779dff3a594b25af3a600da3d04fc60e7efedc35f7dcd8210aabeea329 = $this->env->getExtension("native_profiler");
        $__internal_814705779dff3a594b25af3a600da3d04fc60e7efedc35f7dcd8210aabeea329->enter($__internal_814705779dff3a594b25af3a600da3d04fc60e7efedc35f7dcd8210aabeea329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_814705779dff3a594b25af3a600da3d04fc60e7efedc35f7dcd8210aabeea329->leave($__internal_814705779dff3a594b25af3a600da3d04fc60e7efedc35f7dcd8210aabeea329_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5896d73c6ef78a32be8b3b9fe26246d2c4d5eea8960e67f553c20dd407f42b94 = $this->env->getExtension("native_profiler");
        $__internal_5896d73c6ef78a32be8b3b9fe26246d2c4d5eea8960e67f553c20dd407f42b94->enter($__internal_5896d73c6ef78a32be8b3b9fe26246d2c4d5eea8960e67f553c20dd407f42b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5896d73c6ef78a32be8b3b9fe26246d2c4d5eea8960e67f553c20dd407f42b94->leave($__internal_5896d73c6ef78a32be8b3b9fe26246d2c4d5eea8960e67f553c20dd407f42b94_prof);

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
