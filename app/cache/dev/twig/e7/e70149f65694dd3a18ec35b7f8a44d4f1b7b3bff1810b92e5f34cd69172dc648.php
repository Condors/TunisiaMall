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
        $__internal_c837acabac345ba8f7fff1de77f5c4128e3353c04bd9d4e24f67c3bb13d11e1c = $this->env->getExtension("native_profiler");
        $__internal_c837acabac345ba8f7fff1de77f5c4128e3353c04bd9d4e24f67c3bb13d11e1c->enter($__internal_c837acabac345ba8f7fff1de77f5c4128e3353c04bd9d4e24f67c3bb13d11e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c837acabac345ba8f7fff1de77f5c4128e3353c04bd9d4e24f67c3bb13d11e1c->leave($__internal_c837acabac345ba8f7fff1de77f5c4128e3353c04bd9d4e24f67c3bb13d11e1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c23de5ed8c6ace6a2779e7ba63ea4ea3bb1a110d4fbe4378976cee445363233 = $this->env->getExtension("native_profiler");
        $__internal_8c23de5ed8c6ace6a2779e7ba63ea4ea3bb1a110d4fbe4378976cee445363233->enter($__internal_8c23de5ed8c6ace6a2779e7ba63ea4ea3bb1a110d4fbe4378976cee445363233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c23de5ed8c6ace6a2779e7ba63ea4ea3bb1a110d4fbe4378976cee445363233->leave($__internal_8c23de5ed8c6ace6a2779e7ba63ea4ea3bb1a110d4fbe4378976cee445363233_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c252a852310cf7267a0b9d17eb583573c2726a4ced05919cf4c3fefe57846f4f = $this->env->getExtension("native_profiler");
        $__internal_c252a852310cf7267a0b9d17eb583573c2726a4ced05919cf4c3fefe57846f4f->enter($__internal_c252a852310cf7267a0b9d17eb583573c2726a4ced05919cf4c3fefe57846f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c252a852310cf7267a0b9d17eb583573c2726a4ced05919cf4c3fefe57846f4f->leave($__internal_c252a852310cf7267a0b9d17eb583573c2726a4ced05919cf4c3fefe57846f4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0aa0786ef0579f44fafc732029be7f8f310bc9769b0c87394d9e10fc415184a7 = $this->env->getExtension("native_profiler");
        $__internal_0aa0786ef0579f44fafc732029be7f8f310bc9769b0c87394d9e10fc415184a7->enter($__internal_0aa0786ef0579f44fafc732029be7f8f310bc9769b0c87394d9e10fc415184a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0aa0786ef0579f44fafc732029be7f8f310bc9769b0c87394d9e10fc415184a7->leave($__internal_0aa0786ef0579f44fafc732029be7f8f310bc9769b0c87394d9e10fc415184a7_prof);

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
