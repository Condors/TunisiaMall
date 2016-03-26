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
        $__internal_687121eee6de5b697749a1c935594b66166321cd7cb4f33f33b4d11e7cf57f35 = $this->env->getExtension("native_profiler");
        $__internal_687121eee6de5b697749a1c935594b66166321cd7cb4f33f33b4d11e7cf57f35->enter($__internal_687121eee6de5b697749a1c935594b66166321cd7cb4f33f33b4d11e7cf57f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_687121eee6de5b697749a1c935594b66166321cd7cb4f33f33b4d11e7cf57f35->leave($__internal_687121eee6de5b697749a1c935594b66166321cd7cb4f33f33b4d11e7cf57f35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af5381c03e21407ab8de22a7310c634399a517cc5601cd334ab14748b1b86df2 = $this->env->getExtension("native_profiler");
        $__internal_af5381c03e21407ab8de22a7310c634399a517cc5601cd334ab14748b1b86df2->enter($__internal_af5381c03e21407ab8de22a7310c634399a517cc5601cd334ab14748b1b86df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_af5381c03e21407ab8de22a7310c634399a517cc5601cd334ab14748b1b86df2->leave($__internal_af5381c03e21407ab8de22a7310c634399a517cc5601cd334ab14748b1b86df2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_295287d028ecaf030dc97a8903b09c36b56b252b9f6ebe04662117accfd0742c = $this->env->getExtension("native_profiler");
        $__internal_295287d028ecaf030dc97a8903b09c36b56b252b9f6ebe04662117accfd0742c->enter($__internal_295287d028ecaf030dc97a8903b09c36b56b252b9f6ebe04662117accfd0742c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_295287d028ecaf030dc97a8903b09c36b56b252b9f6ebe04662117accfd0742c->leave($__internal_295287d028ecaf030dc97a8903b09c36b56b252b9f6ebe04662117accfd0742c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e124c10c20b0877e230733d939cb7054ed12c96506197bb51563193924f116d = $this->env->getExtension("native_profiler");
        $__internal_0e124c10c20b0877e230733d939cb7054ed12c96506197bb51563193924f116d->enter($__internal_0e124c10c20b0877e230733d939cb7054ed12c96506197bb51563193924f116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0e124c10c20b0877e230733d939cb7054ed12c96506197bb51563193924f116d->leave($__internal_0e124c10c20b0877e230733d939cb7054ed12c96506197bb51563193924f116d_prof);

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
