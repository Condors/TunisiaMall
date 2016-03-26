<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6ecea94df9fe45da1388495d560b1f0650c67f943bf9f2630827094e4afab1f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_483c535bb469430b190efe7fe043822aa8fa6f0c875db6b1e21830788202cda1 = $this->env->getExtension("native_profiler");
        $__internal_483c535bb469430b190efe7fe043822aa8fa6f0c875db6b1e21830788202cda1->enter($__internal_483c535bb469430b190efe7fe043822aa8fa6f0c875db6b1e21830788202cda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_483c535bb469430b190efe7fe043822aa8fa6f0c875db6b1e21830788202cda1->leave($__internal_483c535bb469430b190efe7fe043822aa8fa6f0c875db6b1e21830788202cda1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ef15afd015aa4394d3f52e8e0e05a1d4cfe41f1dff70f9146ef450e815b3e79 = $this->env->getExtension("native_profiler");
        $__internal_7ef15afd015aa4394d3f52e8e0e05a1d4cfe41f1dff70f9146ef450e815b3e79->enter($__internal_7ef15afd015aa4394d3f52e8e0e05a1d4cfe41f1dff70f9146ef450e815b3e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ef15afd015aa4394d3f52e8e0e05a1d4cfe41f1dff70f9146ef450e815b3e79->leave($__internal_7ef15afd015aa4394d3f52e8e0e05a1d4cfe41f1dff70f9146ef450e815b3e79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86f2b6c7ebe0f5f4cd34d501bd375fa728d003fc6bbbc00a55cd9295f8ecd4a5 = $this->env->getExtension("native_profiler");
        $__internal_86f2b6c7ebe0f5f4cd34d501bd375fa728d003fc6bbbc00a55cd9295f8ecd4a5->enter($__internal_86f2b6c7ebe0f5f4cd34d501bd375fa728d003fc6bbbc00a55cd9295f8ecd4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86f2b6c7ebe0f5f4cd34d501bd375fa728d003fc6bbbc00a55cd9295f8ecd4a5->leave($__internal_86f2b6c7ebe0f5f4cd34d501bd375fa728d003fc6bbbc00a55cd9295f8ecd4a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12f82fa2ad9194ddc6e5962919c5dfc2b40a115a6cf2d9ce1baf91199597996d = $this->env->getExtension("native_profiler");
        $__internal_12f82fa2ad9194ddc6e5962919c5dfc2b40a115a6cf2d9ce1baf91199597996d->enter($__internal_12f82fa2ad9194ddc6e5962919c5dfc2b40a115a6cf2d9ce1baf91199597996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_12f82fa2ad9194ddc6e5962919c5dfc2b40a115a6cf2d9ce1baf91199597996d->leave($__internal_12f82fa2ad9194ddc6e5962919c5dfc2b40a115a6cf2d9ce1baf91199597996d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
