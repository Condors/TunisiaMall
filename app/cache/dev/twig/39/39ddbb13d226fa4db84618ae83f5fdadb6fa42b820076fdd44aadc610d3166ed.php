<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_681a3c771f663c8963792ace2217e8fe462ecfe2e037e17a20a597381f838ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4522bc5b1f101fb1214eeb393ddfc679cf41298d0c79f54fc35510d80b6a9ec9 = $this->env->getExtension("native_profiler");
        $__internal_4522bc5b1f101fb1214eeb393ddfc679cf41298d0c79f54fc35510d80b6a9ec9->enter($__internal_4522bc5b1f101fb1214eeb393ddfc679cf41298d0c79f54fc35510d80b6a9ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4522bc5b1f101fb1214eeb393ddfc679cf41298d0c79f54fc35510d80b6a9ec9->leave($__internal_4522bc5b1f101fb1214eeb393ddfc679cf41298d0c79f54fc35510d80b6a9ec9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edd8632ccdb730729769591e986697c850ad1591646dc02f6d1c701394be0c16 = $this->env->getExtension("native_profiler");
        $__internal_edd8632ccdb730729769591e986697c850ad1591646dc02f6d1c701394be0c16->enter($__internal_edd8632ccdb730729769591e986697c850ad1591646dc02f6d1c701394be0c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_edd8632ccdb730729769591e986697c850ad1591646dc02f6d1c701394be0c16->leave($__internal_edd8632ccdb730729769591e986697c850ad1591646dc02f6d1c701394be0c16_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0e2d9b9a32660b8147a5c324db1b667d951758cd3ef863c0f25c36d16db0c91 = $this->env->getExtension("native_profiler");
        $__internal_e0e2d9b9a32660b8147a5c324db1b667d951758cd3ef863c0f25c36d16db0c91->enter($__internal_e0e2d9b9a32660b8147a5c324db1b667d951758cd3ef863c0f25c36d16db0c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0e2d9b9a32660b8147a5c324db1b667d951758cd3ef863c0f25c36d16db0c91->leave($__internal_e0e2d9b9a32660b8147a5c324db1b667d951758cd3ef863c0f25c36d16db0c91_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37bb48c8e0ec81c4996b2b0be1a0ffefbaeea9a4718640915a126c5829ce75b7 = $this->env->getExtension("native_profiler");
        $__internal_37bb48c8e0ec81c4996b2b0be1a0ffefbaeea9a4718640915a126c5829ce75b7->enter($__internal_37bb48c8e0ec81c4996b2b0be1a0ffefbaeea9a4718640915a126c5829ce75b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37bb48c8e0ec81c4996b2b0be1a0ffefbaeea9a4718640915a126c5829ce75b7->leave($__internal_37bb48c8e0ec81c4996b2b0be1a0ffefbaeea9a4718640915a126c5829ce75b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
