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
        $__internal_1a30065314810f5d67a2186eb1085f505ac22039328906f7b4f0f7693863d167 = $this->env->getExtension("native_profiler");
        $__internal_1a30065314810f5d67a2186eb1085f505ac22039328906f7b4f0f7693863d167->enter($__internal_1a30065314810f5d67a2186eb1085f505ac22039328906f7b4f0f7693863d167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a30065314810f5d67a2186eb1085f505ac22039328906f7b4f0f7693863d167->leave($__internal_1a30065314810f5d67a2186eb1085f505ac22039328906f7b4f0f7693863d167_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed450d6134156f71ec182ce93c6ee8b228d72b416ea57c1050d9c77c1bf86145 = $this->env->getExtension("native_profiler");
        $__internal_ed450d6134156f71ec182ce93c6ee8b228d72b416ea57c1050d9c77c1bf86145->enter($__internal_ed450d6134156f71ec182ce93c6ee8b228d72b416ea57c1050d9c77c1bf86145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ed450d6134156f71ec182ce93c6ee8b228d72b416ea57c1050d9c77c1bf86145->leave($__internal_ed450d6134156f71ec182ce93c6ee8b228d72b416ea57c1050d9c77c1bf86145_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49dbec929cafb8609bef8b53a01c8563d86a5b9b4dab6db1eba15019a5aa2751 = $this->env->getExtension("native_profiler");
        $__internal_49dbec929cafb8609bef8b53a01c8563d86a5b9b4dab6db1eba15019a5aa2751->enter($__internal_49dbec929cafb8609bef8b53a01c8563d86a5b9b4dab6db1eba15019a5aa2751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49dbec929cafb8609bef8b53a01c8563d86a5b9b4dab6db1eba15019a5aa2751->leave($__internal_49dbec929cafb8609bef8b53a01c8563d86a5b9b4dab6db1eba15019a5aa2751_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_029efb39aeed0cd19651923f362c0f5729bba1809f35e0ac70f8ec3d9c844b97 = $this->env->getExtension("native_profiler");
        $__internal_029efb39aeed0cd19651923f362c0f5729bba1809f35e0ac70f8ec3d9c844b97->enter($__internal_029efb39aeed0cd19651923f362c0f5729bba1809f35e0ac70f8ec3d9c844b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_029efb39aeed0cd19651923f362c0f5729bba1809f35e0ac70f8ec3d9c844b97->leave($__internal_029efb39aeed0cd19651923f362c0f5729bba1809f35e0ac70f8ec3d9c844b97_prof);

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
