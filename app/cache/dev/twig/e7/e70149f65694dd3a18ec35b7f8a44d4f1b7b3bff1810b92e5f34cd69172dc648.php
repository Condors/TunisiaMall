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
        $__internal_af7dc11ee4bd5dddec38e7b4c2344dc578576f696d87fe313bee386169dad17e = $this->env->getExtension("native_profiler");
        $__internal_af7dc11ee4bd5dddec38e7b4c2344dc578576f696d87fe313bee386169dad17e->enter($__internal_af7dc11ee4bd5dddec38e7b4c2344dc578576f696d87fe313bee386169dad17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af7dc11ee4bd5dddec38e7b4c2344dc578576f696d87fe313bee386169dad17e->leave($__internal_af7dc11ee4bd5dddec38e7b4c2344dc578576f696d87fe313bee386169dad17e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc6b2d11f439fba90f71601a3ec7b98122ee0e709cfc01a6e087e2642c12bc0b = $this->env->getExtension("native_profiler");
        $__internal_dc6b2d11f439fba90f71601a3ec7b98122ee0e709cfc01a6e087e2642c12bc0b->enter($__internal_dc6b2d11f439fba90f71601a3ec7b98122ee0e709cfc01a6e087e2642c12bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc6b2d11f439fba90f71601a3ec7b98122ee0e709cfc01a6e087e2642c12bc0b->leave($__internal_dc6b2d11f439fba90f71601a3ec7b98122ee0e709cfc01a6e087e2642c12bc0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d75537d8c2f7998debf3d088cb9b04341ec8e789cbd858a16d9755660475a50 = $this->env->getExtension("native_profiler");
        $__internal_4d75537d8c2f7998debf3d088cb9b04341ec8e789cbd858a16d9755660475a50->enter($__internal_4d75537d8c2f7998debf3d088cb9b04341ec8e789cbd858a16d9755660475a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d75537d8c2f7998debf3d088cb9b04341ec8e789cbd858a16d9755660475a50->leave($__internal_4d75537d8c2f7998debf3d088cb9b04341ec8e789cbd858a16d9755660475a50_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_451a5501fe7bfa5689bf5d50a900a89adaf51d29e6fdeaf86a65e81bc1e3ede1 = $this->env->getExtension("native_profiler");
        $__internal_451a5501fe7bfa5689bf5d50a900a89adaf51d29e6fdeaf86a65e81bc1e3ede1->enter($__internal_451a5501fe7bfa5689bf5d50a900a89adaf51d29e6fdeaf86a65e81bc1e3ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_451a5501fe7bfa5689bf5d50a900a89adaf51d29e6fdeaf86a65e81bc1e3ede1->leave($__internal_451a5501fe7bfa5689bf5d50a900a89adaf51d29e6fdeaf86a65e81bc1e3ede1_prof);

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
