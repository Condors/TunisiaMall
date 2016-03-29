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
        $__internal_78d7f61a6bc9fb2ba6b686e10a0430f20bdd6744a791d60e225ebbf83e09bb5c = $this->env->getExtension("native_profiler");
        $__internal_78d7f61a6bc9fb2ba6b686e10a0430f20bdd6744a791d60e225ebbf83e09bb5c->enter($__internal_78d7f61a6bc9fb2ba6b686e10a0430f20bdd6744a791d60e225ebbf83e09bb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d7f61a6bc9fb2ba6b686e10a0430f20bdd6744a791d60e225ebbf83e09bb5c->leave($__internal_78d7f61a6bc9fb2ba6b686e10a0430f20bdd6744a791d60e225ebbf83e09bb5c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a2ccc5a326738109780d5324f49df00578b98fdf13ad6760a3713b65dff6410 = $this->env->getExtension("native_profiler");
        $__internal_4a2ccc5a326738109780d5324f49df00578b98fdf13ad6760a3713b65dff6410->enter($__internal_4a2ccc5a326738109780d5324f49df00578b98fdf13ad6760a3713b65dff6410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a2ccc5a326738109780d5324f49df00578b98fdf13ad6760a3713b65dff6410->leave($__internal_4a2ccc5a326738109780d5324f49df00578b98fdf13ad6760a3713b65dff6410_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80f8f6e8f9a4c58f0c2a10e7c5616e17b806e0b05c07d2ab0159e1d415d39520 = $this->env->getExtension("native_profiler");
        $__internal_80f8f6e8f9a4c58f0c2a10e7c5616e17b806e0b05c07d2ab0159e1d415d39520->enter($__internal_80f8f6e8f9a4c58f0c2a10e7c5616e17b806e0b05c07d2ab0159e1d415d39520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80f8f6e8f9a4c58f0c2a10e7c5616e17b806e0b05c07d2ab0159e1d415d39520->leave($__internal_80f8f6e8f9a4c58f0c2a10e7c5616e17b806e0b05c07d2ab0159e1d415d39520_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f68c70e5f2e21785f35eaaef9985e887c0a49905c5ee8042e93366a452c9ace4 = $this->env->getExtension("native_profiler");
        $__internal_f68c70e5f2e21785f35eaaef9985e887c0a49905c5ee8042e93366a452c9ace4->enter($__internal_f68c70e5f2e21785f35eaaef9985e887c0a49905c5ee8042e93366a452c9ace4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f68c70e5f2e21785f35eaaef9985e887c0a49905c5ee8042e93366a452c9ace4->leave($__internal_f68c70e5f2e21785f35eaaef9985e887c0a49905c5ee8042e93366a452c9ace4_prof);

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
