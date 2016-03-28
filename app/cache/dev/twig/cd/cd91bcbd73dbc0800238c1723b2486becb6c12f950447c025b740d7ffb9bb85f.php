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
        $__internal_2038d946fec7070c4b03dddbdd476cfff743eb09a2bc72aded468061f635eb51 = $this->env->getExtension("native_profiler");
        $__internal_2038d946fec7070c4b03dddbdd476cfff743eb09a2bc72aded468061f635eb51->enter($__internal_2038d946fec7070c4b03dddbdd476cfff743eb09a2bc72aded468061f635eb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2038d946fec7070c4b03dddbdd476cfff743eb09a2bc72aded468061f635eb51->leave($__internal_2038d946fec7070c4b03dddbdd476cfff743eb09a2bc72aded468061f635eb51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28d7fb39440715128fdedf70cd985aab400d03da5432c7544fbd47a6ab989522 = $this->env->getExtension("native_profiler");
        $__internal_28d7fb39440715128fdedf70cd985aab400d03da5432c7544fbd47a6ab989522->enter($__internal_28d7fb39440715128fdedf70cd985aab400d03da5432c7544fbd47a6ab989522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28d7fb39440715128fdedf70cd985aab400d03da5432c7544fbd47a6ab989522->leave($__internal_28d7fb39440715128fdedf70cd985aab400d03da5432c7544fbd47a6ab989522_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3411cb466e4dfdb1ce0327687030c9c17e4a537b6769ae19f8a0f06f9d9f69f5 = $this->env->getExtension("native_profiler");
        $__internal_3411cb466e4dfdb1ce0327687030c9c17e4a537b6769ae19f8a0f06f9d9f69f5->enter($__internal_3411cb466e4dfdb1ce0327687030c9c17e4a537b6769ae19f8a0f06f9d9f69f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3411cb466e4dfdb1ce0327687030c9c17e4a537b6769ae19f8a0f06f9d9f69f5->leave($__internal_3411cb466e4dfdb1ce0327687030c9c17e4a537b6769ae19f8a0f06f9d9f69f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6c3094231b6292f7616775e6648670916d1c6c5a4596c5c680113df8a968543 = $this->env->getExtension("native_profiler");
        $__internal_d6c3094231b6292f7616775e6648670916d1c6c5a4596c5c680113df8a968543->enter($__internal_d6c3094231b6292f7616775e6648670916d1c6c5a4596c5c680113df8a968543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d6c3094231b6292f7616775e6648670916d1c6c5a4596c5c680113df8a968543->leave($__internal_d6c3094231b6292f7616775e6648670916d1c6c5a4596c5c680113df8a968543_prof);

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
