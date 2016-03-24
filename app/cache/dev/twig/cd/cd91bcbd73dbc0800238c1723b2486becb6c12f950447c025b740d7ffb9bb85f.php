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
        $__internal_a29fe9e7fbd1936e2803f4537ae4cd28e58e2c70aa09bfcfebf44f4c933c017e = $this->env->getExtension("native_profiler");
        $__internal_a29fe9e7fbd1936e2803f4537ae4cd28e58e2c70aa09bfcfebf44f4c933c017e->enter($__internal_a29fe9e7fbd1936e2803f4537ae4cd28e58e2c70aa09bfcfebf44f4c933c017e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a29fe9e7fbd1936e2803f4537ae4cd28e58e2c70aa09bfcfebf44f4c933c017e->leave($__internal_a29fe9e7fbd1936e2803f4537ae4cd28e58e2c70aa09bfcfebf44f4c933c017e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4783a9b874992bce60e1fdecd5abd228839dbc4243dfb2a798a47a67534ecb5 = $this->env->getExtension("native_profiler");
        $__internal_a4783a9b874992bce60e1fdecd5abd228839dbc4243dfb2a798a47a67534ecb5->enter($__internal_a4783a9b874992bce60e1fdecd5abd228839dbc4243dfb2a798a47a67534ecb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4783a9b874992bce60e1fdecd5abd228839dbc4243dfb2a798a47a67534ecb5->leave($__internal_a4783a9b874992bce60e1fdecd5abd228839dbc4243dfb2a798a47a67534ecb5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c16203c06d11d31ecd9863fee4a716d5c8dc698eb47f0c95a21f30d62c0927 = $this->env->getExtension("native_profiler");
        $__internal_94c16203c06d11d31ecd9863fee4a716d5c8dc698eb47f0c95a21f30d62c0927->enter($__internal_94c16203c06d11d31ecd9863fee4a716d5c8dc698eb47f0c95a21f30d62c0927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94c16203c06d11d31ecd9863fee4a716d5c8dc698eb47f0c95a21f30d62c0927->leave($__internal_94c16203c06d11d31ecd9863fee4a716d5c8dc698eb47f0c95a21f30d62c0927_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce4c8bd02e904a9273de4f7c308b5926e755f0b6c8b0d360ac5b731632fcfe2 = $this->env->getExtension("native_profiler");
        $__internal_6ce4c8bd02e904a9273de4f7c308b5926e755f0b6c8b0d360ac5b731632fcfe2->enter($__internal_6ce4c8bd02e904a9273de4f7c308b5926e755f0b6c8b0d360ac5b731632fcfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ce4c8bd02e904a9273de4f7c308b5926e755f0b6c8b0d360ac5b731632fcfe2->leave($__internal_6ce4c8bd02e904a9273de4f7c308b5926e755f0b6c8b0d360ac5b731632fcfe2_prof);

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
