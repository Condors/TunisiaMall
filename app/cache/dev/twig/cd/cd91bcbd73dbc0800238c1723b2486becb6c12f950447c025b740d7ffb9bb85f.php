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
        $__internal_5daf375c134739ca91c9089754ab7a46a2291caef40d11d8108abd9b01953089 = $this->env->getExtension("native_profiler");
        $__internal_5daf375c134739ca91c9089754ab7a46a2291caef40d11d8108abd9b01953089->enter($__internal_5daf375c134739ca91c9089754ab7a46a2291caef40d11d8108abd9b01953089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5daf375c134739ca91c9089754ab7a46a2291caef40d11d8108abd9b01953089->leave($__internal_5daf375c134739ca91c9089754ab7a46a2291caef40d11d8108abd9b01953089_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d4190e14ec0b5077215d43d3563296ff1f0986dc3a65d9e5d36b71acc49db79 = $this->env->getExtension("native_profiler");
        $__internal_7d4190e14ec0b5077215d43d3563296ff1f0986dc3a65d9e5d36b71acc49db79->enter($__internal_7d4190e14ec0b5077215d43d3563296ff1f0986dc3a65d9e5d36b71acc49db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d4190e14ec0b5077215d43d3563296ff1f0986dc3a65d9e5d36b71acc49db79->leave($__internal_7d4190e14ec0b5077215d43d3563296ff1f0986dc3a65d9e5d36b71acc49db79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03fbb8bb75c336033224c24ad171856424d3f886a2d798d7656aeb8a44cd6fe0 = $this->env->getExtension("native_profiler");
        $__internal_03fbb8bb75c336033224c24ad171856424d3f886a2d798d7656aeb8a44cd6fe0->enter($__internal_03fbb8bb75c336033224c24ad171856424d3f886a2d798d7656aeb8a44cd6fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03fbb8bb75c336033224c24ad171856424d3f886a2d798d7656aeb8a44cd6fe0->leave($__internal_03fbb8bb75c336033224c24ad171856424d3f886a2d798d7656aeb8a44cd6fe0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_328c0959d5f8d639999a7af39a69cf2658f34bd7f4f59df3540f033720a6c874 = $this->env->getExtension("native_profiler");
        $__internal_328c0959d5f8d639999a7af39a69cf2658f34bd7f4f59df3540f033720a6c874->enter($__internal_328c0959d5f8d639999a7af39a69cf2658f34bd7f4f59df3540f033720a6c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_328c0959d5f8d639999a7af39a69cf2658f34bd7f4f59df3540f033720a6c874->leave($__internal_328c0959d5f8d639999a7af39a69cf2658f34bd7f4f59df3540f033720a6c874_prof);

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
