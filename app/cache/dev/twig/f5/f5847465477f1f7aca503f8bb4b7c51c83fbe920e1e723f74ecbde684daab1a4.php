<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8ec181e6be659056c0c9524ae5d83073bec7bfc148241099341466ea9f7f7d18 extends Twig_Template
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
        $__internal_320a208e65f6ecf7e0d5d7791a53b5895cad90e223e7e8fda33b127764fc497b = $this->env->getExtension("native_profiler");
        $__internal_320a208e65f6ecf7e0d5d7791a53b5895cad90e223e7e8fda33b127764fc497b->enter($__internal_320a208e65f6ecf7e0d5d7791a53b5895cad90e223e7e8fda33b127764fc497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_320a208e65f6ecf7e0d5d7791a53b5895cad90e223e7e8fda33b127764fc497b->leave($__internal_320a208e65f6ecf7e0d5d7791a53b5895cad90e223e7e8fda33b127764fc497b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
