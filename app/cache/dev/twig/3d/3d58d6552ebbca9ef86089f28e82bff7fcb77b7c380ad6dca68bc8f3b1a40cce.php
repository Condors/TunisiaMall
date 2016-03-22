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
        $__internal_d71480ada9ddc5ced9570962126080739308fc4d9355b96fc2fd5423bddb1c7b = $this->env->getExtension("native_profiler");
        $__internal_d71480ada9ddc5ced9570962126080739308fc4d9355b96fc2fd5423bddb1c7b->enter($__internal_d71480ada9ddc5ced9570962126080739308fc4d9355b96fc2fd5423bddb1c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d71480ada9ddc5ced9570962126080739308fc4d9355b96fc2fd5423bddb1c7b->leave($__internal_d71480ada9ddc5ced9570962126080739308fc4d9355b96fc2fd5423bddb1c7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2858379021203ef21efd0b1426f0628bbb65a07128356e8f947efe37b6e589fb = $this->env->getExtension("native_profiler");
        $__internal_2858379021203ef21efd0b1426f0628bbb65a07128356e8f947efe37b6e589fb->enter($__internal_2858379021203ef21efd0b1426f0628bbb65a07128356e8f947efe37b6e589fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2858379021203ef21efd0b1426f0628bbb65a07128356e8f947efe37b6e589fb->leave($__internal_2858379021203ef21efd0b1426f0628bbb65a07128356e8f947efe37b6e589fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9673979ea16491765adf0f91a95cf86d68a0d7053be9cb20e67bb96e0e8f2590 = $this->env->getExtension("native_profiler");
        $__internal_9673979ea16491765adf0f91a95cf86d68a0d7053be9cb20e67bb96e0e8f2590->enter($__internal_9673979ea16491765adf0f91a95cf86d68a0d7053be9cb20e67bb96e0e8f2590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9673979ea16491765adf0f91a95cf86d68a0d7053be9cb20e67bb96e0e8f2590->leave($__internal_9673979ea16491765adf0f91a95cf86d68a0d7053be9cb20e67bb96e0e8f2590_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa35cdedc4c66c1f598cea095d9779d4f5db21f3b4c7c5d1ad0c15988a2f60ca = $this->env->getExtension("native_profiler");
        $__internal_fa35cdedc4c66c1f598cea095d9779d4f5db21f3b4c7c5d1ad0c15988a2f60ca->enter($__internal_fa35cdedc4c66c1f598cea095d9779d4f5db21f3b4c7c5d1ad0c15988a2f60ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa35cdedc4c66c1f598cea095d9779d4f5db21f3b4c7c5d1ad0c15988a2f60ca->leave($__internal_fa35cdedc4c66c1f598cea095d9779d4f5db21f3b4c7c5d1ad0c15988a2f60ca_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_981ec1d1a4ec4ed90afb2f6089a641dbd05e3075e0fd4565e89bdc49c878f50c = $this->env->getExtension("native_profiler");
        $__internal_981ec1d1a4ec4ed90afb2f6089a641dbd05e3075e0fd4565e89bdc49c878f50c->enter($__internal_981ec1d1a4ec4ed90afb2f6089a641dbd05e3075e0fd4565e89bdc49c878f50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_981ec1d1a4ec4ed90afb2f6089a641dbd05e3075e0fd4565e89bdc49c878f50c->leave($__internal_981ec1d1a4ec4ed90afb2f6089a641dbd05e3075e0fd4565e89bdc49c878f50c_prof);

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
