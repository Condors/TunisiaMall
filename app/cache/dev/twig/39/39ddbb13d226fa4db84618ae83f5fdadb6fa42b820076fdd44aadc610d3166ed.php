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
        $__internal_aebc427b28290e579a4183ec7b743db1fd0aa581df868da45305e12add568755 = $this->env->getExtension("native_profiler");
        $__internal_aebc427b28290e579a4183ec7b743db1fd0aa581df868da45305e12add568755->enter($__internal_aebc427b28290e579a4183ec7b743db1fd0aa581df868da45305e12add568755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aebc427b28290e579a4183ec7b743db1fd0aa581df868da45305e12add568755->leave($__internal_aebc427b28290e579a4183ec7b743db1fd0aa581df868da45305e12add568755_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c861344f346574c76f8baf8f93d52fa47a27c17864e6204f9bbe420d38de740b = $this->env->getExtension("native_profiler");
        $__internal_c861344f346574c76f8baf8f93d52fa47a27c17864e6204f9bbe420d38de740b->enter($__internal_c861344f346574c76f8baf8f93d52fa47a27c17864e6204f9bbe420d38de740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c861344f346574c76f8baf8f93d52fa47a27c17864e6204f9bbe420d38de740b->leave($__internal_c861344f346574c76f8baf8f93d52fa47a27c17864e6204f9bbe420d38de740b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f3205c3bcb9e49fd8234029eb1704edaf6be57a11f58e6b10979b9b046d64a7 = $this->env->getExtension("native_profiler");
        $__internal_0f3205c3bcb9e49fd8234029eb1704edaf6be57a11f58e6b10979b9b046d64a7->enter($__internal_0f3205c3bcb9e49fd8234029eb1704edaf6be57a11f58e6b10979b9b046d64a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f3205c3bcb9e49fd8234029eb1704edaf6be57a11f58e6b10979b9b046d64a7->leave($__internal_0f3205c3bcb9e49fd8234029eb1704edaf6be57a11f58e6b10979b9b046d64a7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39c2d85afd2d774d1f5685e9fdf78496c2eef5a56339066d8390f943d42207e7 = $this->env->getExtension("native_profiler");
        $__internal_39c2d85afd2d774d1f5685e9fdf78496c2eef5a56339066d8390f943d42207e7->enter($__internal_39c2d85afd2d774d1f5685e9fdf78496c2eef5a56339066d8390f943d42207e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39c2d85afd2d774d1f5685e9fdf78496c2eef5a56339066d8390f943d42207e7->leave($__internal_39c2d85afd2d774d1f5685e9fdf78496c2eef5a56339066d8390f943d42207e7_prof);

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
