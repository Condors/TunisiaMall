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
        $__internal_624a22d3e6e222da5d108834d2ae2ee6eb2be80870c7279aaf69738b05a7301b = $this->env->getExtension("native_profiler");
        $__internal_624a22d3e6e222da5d108834d2ae2ee6eb2be80870c7279aaf69738b05a7301b->enter($__internal_624a22d3e6e222da5d108834d2ae2ee6eb2be80870c7279aaf69738b05a7301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624a22d3e6e222da5d108834d2ae2ee6eb2be80870c7279aaf69738b05a7301b->leave($__internal_624a22d3e6e222da5d108834d2ae2ee6eb2be80870c7279aaf69738b05a7301b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4227460aa159d3279f7bd1221ca7b04736ab6d8fc24c8a5ccd54682a775b23c9 = $this->env->getExtension("native_profiler");
        $__internal_4227460aa159d3279f7bd1221ca7b04736ab6d8fc24c8a5ccd54682a775b23c9->enter($__internal_4227460aa159d3279f7bd1221ca7b04736ab6d8fc24c8a5ccd54682a775b23c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4227460aa159d3279f7bd1221ca7b04736ab6d8fc24c8a5ccd54682a775b23c9->leave($__internal_4227460aa159d3279f7bd1221ca7b04736ab6d8fc24c8a5ccd54682a775b23c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df804dba720467cf188e105bd0e624ec3da8481b12827b28b90ba667b97c18ba = $this->env->getExtension("native_profiler");
        $__internal_df804dba720467cf188e105bd0e624ec3da8481b12827b28b90ba667b97c18ba->enter($__internal_df804dba720467cf188e105bd0e624ec3da8481b12827b28b90ba667b97c18ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df804dba720467cf188e105bd0e624ec3da8481b12827b28b90ba667b97c18ba->leave($__internal_df804dba720467cf188e105bd0e624ec3da8481b12827b28b90ba667b97c18ba_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e550707c9c4e64018914b484ea83bf0ecbf3fc11200812ffcd3583373f33de76 = $this->env->getExtension("native_profiler");
        $__internal_e550707c9c4e64018914b484ea83bf0ecbf3fc11200812ffcd3583373f33de76->enter($__internal_e550707c9c4e64018914b484ea83bf0ecbf3fc11200812ffcd3583373f33de76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e550707c9c4e64018914b484ea83bf0ecbf3fc11200812ffcd3583373f33de76->leave($__internal_e550707c9c4e64018914b484ea83bf0ecbf3fc11200812ffcd3583373f33de76_prof);

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
