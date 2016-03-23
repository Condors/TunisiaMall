<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bc4075140d293f4bbf551d640d2fd432e45af71edef4cedb217ec1fb29eb664c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc8aaee9f0c70c9c4ec30eb5020e284315973e60bb803334e8a202ffe8a51a6e = $this->env->getExtension("native_profiler");
        $__internal_dc8aaee9f0c70c9c4ec30eb5020e284315973e60bb803334e8a202ffe8a51a6e->enter($__internal_dc8aaee9f0c70c9c4ec30eb5020e284315973e60bb803334e8a202ffe8a51a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc8aaee9f0c70c9c4ec30eb5020e284315973e60bb803334e8a202ffe8a51a6e->leave($__internal_dc8aaee9f0c70c9c4ec30eb5020e284315973e60bb803334e8a202ffe8a51a6e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16615557c755be289eea50ed56393e1d7111ad8e95e0369b22089327dbdefced = $this->env->getExtension("native_profiler");
        $__internal_16615557c755be289eea50ed56393e1d7111ad8e95e0369b22089327dbdefced->enter($__internal_16615557c755be289eea50ed56393e1d7111ad8e95e0369b22089327dbdefced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_16615557c755be289eea50ed56393e1d7111ad8e95e0369b22089327dbdefced->leave($__internal_16615557c755be289eea50ed56393e1d7111ad8e95e0369b22089327dbdefced_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_941907d896f7138da902c234ab3cf946efd14d5b14ea6a706f4785b9a431a79c = $this->env->getExtension("native_profiler");
        $__internal_941907d896f7138da902c234ab3cf946efd14d5b14ea6a706f4785b9a431a79c->enter($__internal_941907d896f7138da902c234ab3cf946efd14d5b14ea6a706f4785b9a431a79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_941907d896f7138da902c234ab3cf946efd14d5b14ea6a706f4785b9a431a79c->leave($__internal_941907d896f7138da902c234ab3cf946efd14d5b14ea6a706f4785b9a431a79c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
