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
        $__internal_4d4765a25e49d08f071bded20d1eb35d9a3bc8e263e1bc0a71493a57a12c10b8 = $this->env->getExtension("native_profiler");
        $__internal_4d4765a25e49d08f071bded20d1eb35d9a3bc8e263e1bc0a71493a57a12c10b8->enter($__internal_4d4765a25e49d08f071bded20d1eb35d9a3bc8e263e1bc0a71493a57a12c10b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4765a25e49d08f071bded20d1eb35d9a3bc8e263e1bc0a71493a57a12c10b8->leave($__internal_4d4765a25e49d08f071bded20d1eb35d9a3bc8e263e1bc0a71493a57a12c10b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb269c6a985923e3f7743c291e8ca37d9c6234f9250526119071afb460ac3a47 = $this->env->getExtension("native_profiler");
        $__internal_eb269c6a985923e3f7743c291e8ca37d9c6234f9250526119071afb460ac3a47->enter($__internal_eb269c6a985923e3f7743c291e8ca37d9c6234f9250526119071afb460ac3a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb269c6a985923e3f7743c291e8ca37d9c6234f9250526119071afb460ac3a47->leave($__internal_eb269c6a985923e3f7743c291e8ca37d9c6234f9250526119071afb460ac3a47_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0bbdc6fee25182606abca77fc132a2673eda10b6236992f86c517de839f05f = $this->env->getExtension("native_profiler");
        $__internal_fc0bbdc6fee25182606abca77fc132a2673eda10b6236992f86c517de839f05f->enter($__internal_fc0bbdc6fee25182606abca77fc132a2673eda10b6236992f86c517de839f05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc0bbdc6fee25182606abca77fc132a2673eda10b6236992f86c517de839f05f->leave($__internal_fc0bbdc6fee25182606abca77fc132a2673eda10b6236992f86c517de839f05f_prof);

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
