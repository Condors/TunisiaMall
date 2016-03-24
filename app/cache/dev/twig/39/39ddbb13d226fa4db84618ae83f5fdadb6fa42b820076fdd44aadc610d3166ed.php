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
        $__internal_32f97baefd76c42252f50cf37f7fb306334e561441d3a499641edf939736af1b = $this->env->getExtension("native_profiler");
        $__internal_32f97baefd76c42252f50cf37f7fb306334e561441d3a499641edf939736af1b->enter($__internal_32f97baefd76c42252f50cf37f7fb306334e561441d3a499641edf939736af1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f97baefd76c42252f50cf37f7fb306334e561441d3a499641edf939736af1b->leave($__internal_32f97baefd76c42252f50cf37f7fb306334e561441d3a499641edf939736af1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_134c5fd7b0fea82d9d38841ad9b7f8e1fe7c750d1656b2c03d9008c42f7c4634 = $this->env->getExtension("native_profiler");
        $__internal_134c5fd7b0fea82d9d38841ad9b7f8e1fe7c750d1656b2c03d9008c42f7c4634->enter($__internal_134c5fd7b0fea82d9d38841ad9b7f8e1fe7c750d1656b2c03d9008c42f7c4634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_134c5fd7b0fea82d9d38841ad9b7f8e1fe7c750d1656b2c03d9008c42f7c4634->leave($__internal_134c5fd7b0fea82d9d38841ad9b7f8e1fe7c750d1656b2c03d9008c42f7c4634_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21e8fe106b2cbce1aca7cb41a6cc7e2c44818fb8ed93f05959b83de46ca179d0 = $this->env->getExtension("native_profiler");
        $__internal_21e8fe106b2cbce1aca7cb41a6cc7e2c44818fb8ed93f05959b83de46ca179d0->enter($__internal_21e8fe106b2cbce1aca7cb41a6cc7e2c44818fb8ed93f05959b83de46ca179d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_21e8fe106b2cbce1aca7cb41a6cc7e2c44818fb8ed93f05959b83de46ca179d0->leave($__internal_21e8fe106b2cbce1aca7cb41a6cc7e2c44818fb8ed93f05959b83de46ca179d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3061045081a3bf0b75463d3f637fc464ad189161cf8ba3e27d0fda2639b0c619 = $this->env->getExtension("native_profiler");
        $__internal_3061045081a3bf0b75463d3f637fc464ad189161cf8ba3e27d0fda2639b0c619->enter($__internal_3061045081a3bf0b75463d3f637fc464ad189161cf8ba3e27d0fda2639b0c619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3061045081a3bf0b75463d3f637fc464ad189161cf8ba3e27d0fda2639b0c619->leave($__internal_3061045081a3bf0b75463d3f637fc464ad189161cf8ba3e27d0fda2639b0c619_prof);

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
