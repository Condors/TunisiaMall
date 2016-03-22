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
        $__internal_509e99a7699d9c5f7d5bf33f3813f1fd0ef6d855550e4310d0c8dd26800a7d47 = $this->env->getExtension("native_profiler");
        $__internal_509e99a7699d9c5f7d5bf33f3813f1fd0ef6d855550e4310d0c8dd26800a7d47->enter($__internal_509e99a7699d9c5f7d5bf33f3813f1fd0ef6d855550e4310d0c8dd26800a7d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509e99a7699d9c5f7d5bf33f3813f1fd0ef6d855550e4310d0c8dd26800a7d47->leave($__internal_509e99a7699d9c5f7d5bf33f3813f1fd0ef6d855550e4310d0c8dd26800a7d47_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fa3364d4fc05abb32290856a72b258b6d027fb95b6e930d682d8c4eb86fb2ce = $this->env->getExtension("native_profiler");
        $__internal_7fa3364d4fc05abb32290856a72b258b6d027fb95b6e930d682d8c4eb86fb2ce->enter($__internal_7fa3364d4fc05abb32290856a72b258b6d027fb95b6e930d682d8c4eb86fb2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7fa3364d4fc05abb32290856a72b258b6d027fb95b6e930d682d8c4eb86fb2ce->leave($__internal_7fa3364d4fc05abb32290856a72b258b6d027fb95b6e930d682d8c4eb86fb2ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c494648e5497e082a6ff4d6fb35c11b3825ed3868ea428374fc922c289a8e4d = $this->env->getExtension("native_profiler");
        $__internal_7c494648e5497e082a6ff4d6fb35c11b3825ed3868ea428374fc922c289a8e4d->enter($__internal_7c494648e5497e082a6ff4d6fb35c11b3825ed3868ea428374fc922c289a8e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c494648e5497e082a6ff4d6fb35c11b3825ed3868ea428374fc922c289a8e4d->leave($__internal_7c494648e5497e082a6ff4d6fb35c11b3825ed3868ea428374fc922c289a8e4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5eb4d2a38be409d20c51873329dade515b2677e7628f35c650843b0f426bf598 = $this->env->getExtension("native_profiler");
        $__internal_5eb4d2a38be409d20c51873329dade515b2677e7628f35c650843b0f426bf598->enter($__internal_5eb4d2a38be409d20c51873329dade515b2677e7628f35c650843b0f426bf598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5eb4d2a38be409d20c51873329dade515b2677e7628f35c650843b0f426bf598->leave($__internal_5eb4d2a38be409d20c51873329dade515b2677e7628f35c650843b0f426bf598_prof);

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
