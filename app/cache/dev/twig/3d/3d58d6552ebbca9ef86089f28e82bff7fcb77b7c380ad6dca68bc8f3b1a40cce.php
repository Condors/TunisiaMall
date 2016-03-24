<?php

/* ::base.html.twig */
class __TwigTemplate_25038e0284a003815c9bffee035b85bc8046d3752b2145f0c9bcef840bad48c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da811c63670a7363272c01394081a27d3486109a6d5478cbb36c58f6ea0f790f = $this->env->getExtension("native_profiler");
        $__internal_da811c63670a7363272c01394081a27d3486109a6d5478cbb36c58f6ea0f790f->enter($__internal_da811c63670a7363272c01394081a27d3486109a6d5478cbb36c58f6ea0f790f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_da811c63670a7363272c01394081a27d3486109a6d5478cbb36c58f6ea0f790f->leave($__internal_da811c63670a7363272c01394081a27d3486109a6d5478cbb36c58f6ea0f790f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed198c38da82048fa13971e1c955365d91cabd1b6ea4468ccd0783de0c2fe0be = $this->env->getExtension("native_profiler");
        $__internal_ed198c38da82048fa13971e1c955365d91cabd1b6ea4468ccd0783de0c2fe0be->enter($__internal_ed198c38da82048fa13971e1c955365d91cabd1b6ea4468ccd0783de0c2fe0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed198c38da82048fa13971e1c955365d91cabd1b6ea4468ccd0783de0c2fe0be->leave($__internal_ed198c38da82048fa13971e1c955365d91cabd1b6ea4468ccd0783de0c2fe0be_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5df783cef2d1123bff892b7b9b59250396ed93bca77af0b2a214f50b53323897 = $this->env->getExtension("native_profiler");
        $__internal_5df783cef2d1123bff892b7b9b59250396ed93bca77af0b2a214f50b53323897->enter($__internal_5df783cef2d1123bff892b7b9b59250396ed93bca77af0b2a214f50b53323897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5df783cef2d1123bff892b7b9b59250396ed93bca77af0b2a214f50b53323897->leave($__internal_5df783cef2d1123bff892b7b9b59250396ed93bca77af0b2a214f50b53323897_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c682486f48b8bf66d9cbad01065820ff61c8a61d8a1376dbd1499b739248ec3c = $this->env->getExtension("native_profiler");
        $__internal_c682486f48b8bf66d9cbad01065820ff61c8a61d8a1376dbd1499b739248ec3c->enter($__internal_c682486f48b8bf66d9cbad01065820ff61c8a61d8a1376dbd1499b739248ec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c682486f48b8bf66d9cbad01065820ff61c8a61d8a1376dbd1499b739248ec3c->leave($__internal_c682486f48b8bf66d9cbad01065820ff61c8a61d8a1376dbd1499b739248ec3c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de29b27858bd091d4b59b74034dd47b46d8bf7b5981935cd76155864f6e68714 = $this->env->getExtension("native_profiler");
        $__internal_de29b27858bd091d4b59b74034dd47b46d8bf7b5981935cd76155864f6e68714->enter($__internal_de29b27858bd091d4b59b74034dd47b46d8bf7b5981935cd76155864f6e68714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de29b27858bd091d4b59b74034dd47b46d8bf7b5981935cd76155864f6e68714->leave($__internal_de29b27858bd091d4b59b74034dd47b46d8bf7b5981935cd76155864f6e68714_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
