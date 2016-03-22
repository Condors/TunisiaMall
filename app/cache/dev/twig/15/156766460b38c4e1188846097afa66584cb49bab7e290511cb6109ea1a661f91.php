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
        $__internal_5e2862f37c8b4046ff314e33b52cefffc1ba4075643c2cca4fd0d5231486d14c = $this->env->getExtension("native_profiler");
        $__internal_5e2862f37c8b4046ff314e33b52cefffc1ba4075643c2cca4fd0d5231486d14c->enter($__internal_5e2862f37c8b4046ff314e33b52cefffc1ba4075643c2cca4fd0d5231486d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2862f37c8b4046ff314e33b52cefffc1ba4075643c2cca4fd0d5231486d14c->leave($__internal_5e2862f37c8b4046ff314e33b52cefffc1ba4075643c2cca4fd0d5231486d14c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee3d5a5941ca1a1047af55d627b43af4a2f22bb52b48f2ee378ee4c688fad37 = $this->env->getExtension("native_profiler");
        $__internal_6ee3d5a5941ca1a1047af55d627b43af4a2f22bb52b48f2ee378ee4c688fad37->enter($__internal_6ee3d5a5941ca1a1047af55d627b43af4a2f22bb52b48f2ee378ee4c688fad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6ee3d5a5941ca1a1047af55d627b43af4a2f22bb52b48f2ee378ee4c688fad37->leave($__internal_6ee3d5a5941ca1a1047af55d627b43af4a2f22bb52b48f2ee378ee4c688fad37_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_52c0aec85287e88bb66285695b8f8f3bae41b562f4095201832b888828418010 = $this->env->getExtension("native_profiler");
        $__internal_52c0aec85287e88bb66285695b8f8f3bae41b562f4095201832b888828418010->enter($__internal_52c0aec85287e88bb66285695b8f8f3bae41b562f4095201832b888828418010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52c0aec85287e88bb66285695b8f8f3bae41b562f4095201832b888828418010->leave($__internal_52c0aec85287e88bb66285695b8f8f3bae41b562f4095201832b888828418010_prof);

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
