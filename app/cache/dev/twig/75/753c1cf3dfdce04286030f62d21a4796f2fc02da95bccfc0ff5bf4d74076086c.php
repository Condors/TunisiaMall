<?php

/* base.html.twig */
class __TwigTemplate_aecfa3cedfee541ceb202080a90bc35933a46d734d89909c613c4bcfb7a41fd8 extends Twig_Template
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
        $__internal_b2395b5eba741f63a87aad568299b86ac1ce4c2796ffa04a3539a10136fb0523 = $this->env->getExtension("native_profiler");
        $__internal_b2395b5eba741f63a87aad568299b86ac1ce4c2796ffa04a3539a10136fb0523->enter($__internal_b2395b5eba741f63a87aad568299b86ac1ce4c2796ffa04a3539a10136fb0523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b2395b5eba741f63a87aad568299b86ac1ce4c2796ffa04a3539a10136fb0523->leave($__internal_b2395b5eba741f63a87aad568299b86ac1ce4c2796ffa04a3539a10136fb0523_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7f947f70744b9681ce1a05c5966f6b2c4f4e7eadc675b2c7d95237d91bcf0fe = $this->env->getExtension("native_profiler");
        $__internal_d7f947f70744b9681ce1a05c5966f6b2c4f4e7eadc675b2c7d95237d91bcf0fe->enter($__internal_d7f947f70744b9681ce1a05c5966f6b2c4f4e7eadc675b2c7d95237d91bcf0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d7f947f70744b9681ce1a05c5966f6b2c4f4e7eadc675b2c7d95237d91bcf0fe->leave($__internal_d7f947f70744b9681ce1a05c5966f6b2c4f4e7eadc675b2c7d95237d91bcf0fe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e2043c766650d1d840426616b3d67295ae5c6c153e205623c5e6c0d23ee1259 = $this->env->getExtension("native_profiler");
        $__internal_2e2043c766650d1d840426616b3d67295ae5c6c153e205623c5e6c0d23ee1259->enter($__internal_2e2043c766650d1d840426616b3d67295ae5c6c153e205623c5e6c0d23ee1259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e2043c766650d1d840426616b3d67295ae5c6c153e205623c5e6c0d23ee1259->leave($__internal_2e2043c766650d1d840426616b3d67295ae5c6c153e205623c5e6c0d23ee1259_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3513bef3447d7df63ea4b7b50eb4746e2b7cc88909fc0beec42254449641112 = $this->env->getExtension("native_profiler");
        $__internal_b3513bef3447d7df63ea4b7b50eb4746e2b7cc88909fc0beec42254449641112->enter($__internal_b3513bef3447d7df63ea4b7b50eb4746e2b7cc88909fc0beec42254449641112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b3513bef3447d7df63ea4b7b50eb4746e2b7cc88909fc0beec42254449641112->leave($__internal_b3513bef3447d7df63ea4b7b50eb4746e2b7cc88909fc0beec42254449641112_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4ac93c0e82621d9c245ca16b23e06c8f64056dfb6dd2b2f13f109dff5b1d440 = $this->env->getExtension("native_profiler");
        $__internal_d4ac93c0e82621d9c245ca16b23e06c8f64056dfb6dd2b2f13f109dff5b1d440->enter($__internal_d4ac93c0e82621d9c245ca16b23e06c8f64056dfb6dd2b2f13f109dff5b1d440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4ac93c0e82621d9c245ca16b23e06c8f64056dfb6dd2b2f13f109dff5b1d440->leave($__internal_d4ac93c0e82621d9c245ca16b23e06c8f64056dfb6dd2b2f13f109dff5b1d440_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
