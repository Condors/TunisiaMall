<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_c62c49454c1d1b6d2e4bb58949ef5398f5b072175748b3ae7c978ea178bb8aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d719f4d428ffe9d02460d79fac8fbb9daa66ae4c6a2434eeca29e1784df548ff = $this->env->getExtension("native_profiler");
        $__internal_d719f4d428ffe9d02460d79fac8fbb9daa66ae4c6a2434eeca29e1784df548ff->enter($__internal_d719f4d428ffe9d02460d79fac8fbb9daa66ae4c6a2434eeca29e1784df548ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d719f4d428ffe9d02460d79fac8fbb9daa66ae4c6a2434eeca29e1784df548ff->leave($__internal_d719f4d428ffe9d02460d79fac8fbb9daa66ae4c6a2434eeca29e1784df548ff_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */