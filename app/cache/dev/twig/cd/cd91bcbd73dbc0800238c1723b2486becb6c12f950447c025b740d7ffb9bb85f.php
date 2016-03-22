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
        $__internal_b81213b162d811f6c13ab1ac206483022f05bf3dbb38736cd41479098998a3de = $this->env->getExtension("native_profiler");
        $__internal_b81213b162d811f6c13ab1ac206483022f05bf3dbb38736cd41479098998a3de->enter($__internal_b81213b162d811f6c13ab1ac206483022f05bf3dbb38736cd41479098998a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b81213b162d811f6c13ab1ac206483022f05bf3dbb38736cd41479098998a3de->leave($__internal_b81213b162d811f6c13ab1ac206483022f05bf3dbb38736cd41479098998a3de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_331d12613877f5ae35cf3967eee2f1d15f99f51a2b807d9a88ec875cf68f4940 = $this->env->getExtension("native_profiler");
        $__internal_331d12613877f5ae35cf3967eee2f1d15f99f51a2b807d9a88ec875cf68f4940->enter($__internal_331d12613877f5ae35cf3967eee2f1d15f99f51a2b807d9a88ec875cf68f4940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_331d12613877f5ae35cf3967eee2f1d15f99f51a2b807d9a88ec875cf68f4940->leave($__internal_331d12613877f5ae35cf3967eee2f1d15f99f51a2b807d9a88ec875cf68f4940_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd6976e0253fc36aa22af79b41ecc954179506cfa18d823d7def4951278be265 = $this->env->getExtension("native_profiler");
        $__internal_fd6976e0253fc36aa22af79b41ecc954179506cfa18d823d7def4951278be265->enter($__internal_fd6976e0253fc36aa22af79b41ecc954179506cfa18d823d7def4951278be265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd6976e0253fc36aa22af79b41ecc954179506cfa18d823d7def4951278be265->leave($__internal_fd6976e0253fc36aa22af79b41ecc954179506cfa18d823d7def4951278be265_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5198e9571d748ce06a2478429ae326a8fb05f7b18e488b00acc6f9c78eaa3b27 = $this->env->getExtension("native_profiler");
        $__internal_5198e9571d748ce06a2478429ae326a8fb05f7b18e488b00acc6f9c78eaa3b27->enter($__internal_5198e9571d748ce06a2478429ae326a8fb05f7b18e488b00acc6f9c78eaa3b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5198e9571d748ce06a2478429ae326a8fb05f7b18e488b00acc6f9c78eaa3b27->leave($__internal_5198e9571d748ce06a2478429ae326a8fb05f7b18e488b00acc6f9c78eaa3b27_prof);

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
