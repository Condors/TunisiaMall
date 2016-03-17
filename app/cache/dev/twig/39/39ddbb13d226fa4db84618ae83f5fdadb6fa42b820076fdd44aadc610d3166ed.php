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
        $__internal_1ee330fd2e1ec2c2b2ea7d92693ce9cfd8713f4a8e46b88f4e2b8a94d61b3059 = $this->env->getExtension("native_profiler");
        $__internal_1ee330fd2e1ec2c2b2ea7d92693ce9cfd8713f4a8e46b88f4e2b8a94d61b3059->enter($__internal_1ee330fd2e1ec2c2b2ea7d92693ce9cfd8713f4a8e46b88f4e2b8a94d61b3059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee330fd2e1ec2c2b2ea7d92693ce9cfd8713f4a8e46b88f4e2b8a94d61b3059->leave($__internal_1ee330fd2e1ec2c2b2ea7d92693ce9cfd8713f4a8e46b88f4e2b8a94d61b3059_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_783d1156dfc44faf5188a370adbac3cb3a8fe6b469104781198a9b1c3b4febb7 = $this->env->getExtension("native_profiler");
        $__internal_783d1156dfc44faf5188a370adbac3cb3a8fe6b469104781198a9b1c3b4febb7->enter($__internal_783d1156dfc44faf5188a370adbac3cb3a8fe6b469104781198a9b1c3b4febb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_783d1156dfc44faf5188a370adbac3cb3a8fe6b469104781198a9b1c3b4febb7->leave($__internal_783d1156dfc44faf5188a370adbac3cb3a8fe6b469104781198a9b1c3b4febb7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a1119c950c0898eb850ef7ffec81039b0b9040c5aa12a956e62e5a4bafff12c = $this->env->getExtension("native_profiler");
        $__internal_1a1119c950c0898eb850ef7ffec81039b0b9040c5aa12a956e62e5a4bafff12c->enter($__internal_1a1119c950c0898eb850ef7ffec81039b0b9040c5aa12a956e62e5a4bafff12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a1119c950c0898eb850ef7ffec81039b0b9040c5aa12a956e62e5a4bafff12c->leave($__internal_1a1119c950c0898eb850ef7ffec81039b0b9040c5aa12a956e62e5a4bafff12c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_032ca2a2b18594431e8557dd42875bf7a99af8fe4c8042497056edfb8ef67403 = $this->env->getExtension("native_profiler");
        $__internal_032ca2a2b18594431e8557dd42875bf7a99af8fe4c8042497056edfb8ef67403->enter($__internal_032ca2a2b18594431e8557dd42875bf7a99af8fe4c8042497056edfb8ef67403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_032ca2a2b18594431e8557dd42875bf7a99af8fe4c8042497056edfb8ef67403->leave($__internal_032ca2a2b18594431e8557dd42875bf7a99af8fe4c8042497056edfb8ef67403_prof);

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
