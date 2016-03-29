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
        $__internal_9865f1157a3127c9f89eedeeb63b40772a8554aeeecd69acd72b903fb164d2fa = $this->env->getExtension("native_profiler");
        $__internal_9865f1157a3127c9f89eedeeb63b40772a8554aeeecd69acd72b903fb164d2fa->enter($__internal_9865f1157a3127c9f89eedeeb63b40772a8554aeeecd69acd72b903fb164d2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9865f1157a3127c9f89eedeeb63b40772a8554aeeecd69acd72b903fb164d2fa->leave($__internal_9865f1157a3127c9f89eedeeb63b40772a8554aeeecd69acd72b903fb164d2fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcbf72f372e0dbdf89e9be025706c577dbd8ba50e13cc689b0d2633e84407de9 = $this->env->getExtension("native_profiler");
        $__internal_dcbf72f372e0dbdf89e9be025706c577dbd8ba50e13cc689b0d2633e84407de9->enter($__internal_dcbf72f372e0dbdf89e9be025706c577dbd8ba50e13cc689b0d2633e84407de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dcbf72f372e0dbdf89e9be025706c577dbd8ba50e13cc689b0d2633e84407de9->leave($__internal_dcbf72f372e0dbdf89e9be025706c577dbd8ba50e13cc689b0d2633e84407de9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91aa0437e9968eeec0e188dd55a157da7d9a7cd5f3dce29099c5c3874b9f0c43 = $this->env->getExtension("native_profiler");
        $__internal_91aa0437e9968eeec0e188dd55a157da7d9a7cd5f3dce29099c5c3874b9f0c43->enter($__internal_91aa0437e9968eeec0e188dd55a157da7d9a7cd5f3dce29099c5c3874b9f0c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91aa0437e9968eeec0e188dd55a157da7d9a7cd5f3dce29099c5c3874b9f0c43->leave($__internal_91aa0437e9968eeec0e188dd55a157da7d9a7cd5f3dce29099c5c3874b9f0c43_prof);

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
