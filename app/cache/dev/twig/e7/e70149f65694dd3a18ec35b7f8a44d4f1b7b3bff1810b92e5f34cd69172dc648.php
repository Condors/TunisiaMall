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
        $__internal_cfe7109a06d470daa2c1ad67161208e3be907693002292918cba71a41a2cb3d1 = $this->env->getExtension("native_profiler");
        $__internal_cfe7109a06d470daa2c1ad67161208e3be907693002292918cba71a41a2cb3d1->enter($__internal_cfe7109a06d470daa2c1ad67161208e3be907693002292918cba71a41a2cb3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe7109a06d470daa2c1ad67161208e3be907693002292918cba71a41a2cb3d1->leave($__internal_cfe7109a06d470daa2c1ad67161208e3be907693002292918cba71a41a2cb3d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70763c32426f912b963435b5a1273ab7fc73e385d06e90f2d1c2f3205188e43e = $this->env->getExtension("native_profiler");
        $__internal_70763c32426f912b963435b5a1273ab7fc73e385d06e90f2d1c2f3205188e43e->enter($__internal_70763c32426f912b963435b5a1273ab7fc73e385d06e90f2d1c2f3205188e43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70763c32426f912b963435b5a1273ab7fc73e385d06e90f2d1c2f3205188e43e->leave($__internal_70763c32426f912b963435b5a1273ab7fc73e385d06e90f2d1c2f3205188e43e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f7ac0c362d2fb749bfe2fb0ed04eaeac3d687246af1085f4df24ccc99626e59 = $this->env->getExtension("native_profiler");
        $__internal_2f7ac0c362d2fb749bfe2fb0ed04eaeac3d687246af1085f4df24ccc99626e59->enter($__internal_2f7ac0c362d2fb749bfe2fb0ed04eaeac3d687246af1085f4df24ccc99626e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f7ac0c362d2fb749bfe2fb0ed04eaeac3d687246af1085f4df24ccc99626e59->leave($__internal_2f7ac0c362d2fb749bfe2fb0ed04eaeac3d687246af1085f4df24ccc99626e59_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5501107a8bab50650ba91082acd05427259e276408e41230d641a183b59e66bb = $this->env->getExtension("native_profiler");
        $__internal_5501107a8bab50650ba91082acd05427259e276408e41230d641a183b59e66bb->enter($__internal_5501107a8bab50650ba91082acd05427259e276408e41230d641a183b59e66bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5501107a8bab50650ba91082acd05427259e276408e41230d641a183b59e66bb->leave($__internal_5501107a8bab50650ba91082acd05427259e276408e41230d641a183b59e66bb_prof);

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
