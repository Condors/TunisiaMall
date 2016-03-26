<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bc4075140d293f4bbf551d640d2fd432e45af71edef4cedb217ec1fb29eb664c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ec4fd96efc352c2b4c72417b769f09d988c6d53fa50714b85db3d952e25b0e68 = $this->env->getExtension("native_profiler");
        $__internal_ec4fd96efc352c2b4c72417b769f09d988c6d53fa50714b85db3d952e25b0e68->enter($__internal_ec4fd96efc352c2b4c72417b769f09d988c6d53fa50714b85db3d952e25b0e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec4fd96efc352c2b4c72417b769f09d988c6d53fa50714b85db3d952e25b0e68->leave($__internal_ec4fd96efc352c2b4c72417b769f09d988c6d53fa50714b85db3d952e25b0e68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_304776b6f947e19adfef09a7c57c2bdc82783c31a8edc98fd791d5e5d917a4de = $this->env->getExtension("native_profiler");
        $__internal_304776b6f947e19adfef09a7c57c2bdc82783c31a8edc98fd791d5e5d917a4de->enter($__internal_304776b6f947e19adfef09a7c57c2bdc82783c31a8edc98fd791d5e5d917a4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_304776b6f947e19adfef09a7c57c2bdc82783c31a8edc98fd791d5e5d917a4de->leave($__internal_304776b6f947e19adfef09a7c57c2bdc82783c31a8edc98fd791d5e5d917a4de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f0a88362a94acdb1985163d681608f0bc65add4463ad5f0b5f9cc1981c46bd = $this->env->getExtension("native_profiler");
        $__internal_47f0a88362a94acdb1985163d681608f0bc65add4463ad5f0b5f9cc1981c46bd->enter($__internal_47f0a88362a94acdb1985163d681608f0bc65add4463ad5f0b5f9cc1981c46bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_47f0a88362a94acdb1985163d681608f0bc65add4463ad5f0b5f9cc1981c46bd->leave($__internal_47f0a88362a94acdb1985163d681608f0bc65add4463ad5f0b5f9cc1981c46bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
