<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef69253004817358470122fd3abe2b779dd4da397f524b6ab977dfd50bce7211 extends Twig_Template
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
        $__internal_da24aa7f5ff6bc46494553211f5f3e9adff71f53399096eb620e37d6a2b93845 = $this->env->getExtension("native_profiler");
        $__internal_da24aa7f5ff6bc46494553211f5f3e9adff71f53399096eb620e37d6a2b93845->enter($__internal_da24aa7f5ff6bc46494553211f5f3e9adff71f53399096eb620e37d6a2b93845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da24aa7f5ff6bc46494553211f5f3e9adff71f53399096eb620e37d6a2b93845->leave($__internal_da24aa7f5ff6bc46494553211f5f3e9adff71f53399096eb620e37d6a2b93845_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d56ac6f010d952a5b934b4aa901fb7e1f5f559dde681e8ba00698a25c7815a76 = $this->env->getExtension("native_profiler");
        $__internal_d56ac6f010d952a5b934b4aa901fb7e1f5f559dde681e8ba00698a25c7815a76->enter($__internal_d56ac6f010d952a5b934b4aa901fb7e1f5f559dde681e8ba00698a25c7815a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d56ac6f010d952a5b934b4aa901fb7e1f5f559dde681e8ba00698a25c7815a76->leave($__internal_d56ac6f010d952a5b934b4aa901fb7e1f5f559dde681e8ba00698a25c7815a76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6475a5c8f01c901d715569b0e635deb90003b252a33b642b0034ebc3a2413f6f = $this->env->getExtension("native_profiler");
        $__internal_6475a5c8f01c901d715569b0e635deb90003b252a33b642b0034ebc3a2413f6f->enter($__internal_6475a5c8f01c901d715569b0e635deb90003b252a33b642b0034ebc3a2413f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6475a5c8f01c901d715569b0e635deb90003b252a33b642b0034ebc3a2413f6f->leave($__internal_6475a5c8f01c901d715569b0e635deb90003b252a33b642b0034ebc3a2413f6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b315614d45c42ad99e325f8265edfa7b8d3269235e7246c39e3a3c2398cc67a9 = $this->env->getExtension("native_profiler");
        $__internal_b315614d45c42ad99e325f8265edfa7b8d3269235e7246c39e3a3c2398cc67a9->enter($__internal_b315614d45c42ad99e325f8265edfa7b8d3269235e7246c39e3a3c2398cc67a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b315614d45c42ad99e325f8265edfa7b8d3269235e7246c39e3a3c2398cc67a9->leave($__internal_b315614d45c42ad99e325f8265edfa7b8d3269235e7246c39e3a3c2398cc67a9_prof);

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
