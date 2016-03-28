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
        $__internal_394d1f3a35a6421f46bf7766d0f370ad7778b0dbbbbb7dfb7654c935b50a50c6 = $this->env->getExtension("native_profiler");
        $__internal_394d1f3a35a6421f46bf7766d0f370ad7778b0dbbbbb7dfb7654c935b50a50c6->enter($__internal_394d1f3a35a6421f46bf7766d0f370ad7778b0dbbbbb7dfb7654c935b50a50c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394d1f3a35a6421f46bf7766d0f370ad7778b0dbbbbb7dfb7654c935b50a50c6->leave($__internal_394d1f3a35a6421f46bf7766d0f370ad7778b0dbbbbb7dfb7654c935b50a50c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd8a7674c7c82b2845f68cdb7d1c07f6970b3d366f3844ee47507402bc3eb200 = $this->env->getExtension("native_profiler");
        $__internal_fd8a7674c7c82b2845f68cdb7d1c07f6970b3d366f3844ee47507402bc3eb200->enter($__internal_fd8a7674c7c82b2845f68cdb7d1c07f6970b3d366f3844ee47507402bc3eb200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd8a7674c7c82b2845f68cdb7d1c07f6970b3d366f3844ee47507402bc3eb200->leave($__internal_fd8a7674c7c82b2845f68cdb7d1c07f6970b3d366f3844ee47507402bc3eb200_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_644b47002c49ed49f5fa49bb74e1e8dbdb004c6f9497e1914e29287346cfc3b3 = $this->env->getExtension("native_profiler");
        $__internal_644b47002c49ed49f5fa49bb74e1e8dbdb004c6f9497e1914e29287346cfc3b3->enter($__internal_644b47002c49ed49f5fa49bb74e1e8dbdb004c6f9497e1914e29287346cfc3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_644b47002c49ed49f5fa49bb74e1e8dbdb004c6f9497e1914e29287346cfc3b3->leave($__internal_644b47002c49ed49f5fa49bb74e1e8dbdb004c6f9497e1914e29287346cfc3b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a905bd19e90d9df046dd8e8314900d3157d56f2451542d6332b0280dc8f4d190 = $this->env->getExtension("native_profiler");
        $__internal_a905bd19e90d9df046dd8e8314900d3157d56f2451542d6332b0280dc8f4d190->enter($__internal_a905bd19e90d9df046dd8e8314900d3157d56f2451542d6332b0280dc8f4d190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a905bd19e90d9df046dd8e8314900d3157d56f2451542d6332b0280dc8f4d190->leave($__internal_a905bd19e90d9df046dd8e8314900d3157d56f2451542d6332b0280dc8f4d190_prof);

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
