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
        $__internal_8622922b6e4ac7975f04899ff974021f2359646382b61b0d9a381cef31a8be13 = $this->env->getExtension("native_profiler");
        $__internal_8622922b6e4ac7975f04899ff974021f2359646382b61b0d9a381cef31a8be13->enter($__internal_8622922b6e4ac7975f04899ff974021f2359646382b61b0d9a381cef31a8be13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8622922b6e4ac7975f04899ff974021f2359646382b61b0d9a381cef31a8be13->leave($__internal_8622922b6e4ac7975f04899ff974021f2359646382b61b0d9a381cef31a8be13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e3312173d2701deb1b139618f765b7d4774e328eebd05f3e94ffd8b40f05d45 = $this->env->getExtension("native_profiler");
        $__internal_9e3312173d2701deb1b139618f765b7d4774e328eebd05f3e94ffd8b40f05d45->enter($__internal_9e3312173d2701deb1b139618f765b7d4774e328eebd05f3e94ffd8b40f05d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e3312173d2701deb1b139618f765b7d4774e328eebd05f3e94ffd8b40f05d45->leave($__internal_9e3312173d2701deb1b139618f765b7d4774e328eebd05f3e94ffd8b40f05d45_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ad4681001fc6b233d7205573bd34ff3635bd4ff5846b0bffe285d3f05af205a = $this->env->getExtension("native_profiler");
        $__internal_6ad4681001fc6b233d7205573bd34ff3635bd4ff5846b0bffe285d3f05af205a->enter($__internal_6ad4681001fc6b233d7205573bd34ff3635bd4ff5846b0bffe285d3f05af205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ad4681001fc6b233d7205573bd34ff3635bd4ff5846b0bffe285d3f05af205a->leave($__internal_6ad4681001fc6b233d7205573bd34ff3635bd4ff5846b0bffe285d3f05af205a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_615e3fd586ca80fe60da455ff56d41692d82eb99e69034ea551f174b177f5b4f = $this->env->getExtension("native_profiler");
        $__internal_615e3fd586ca80fe60da455ff56d41692d82eb99e69034ea551f174b177f5b4f->enter($__internal_615e3fd586ca80fe60da455ff56d41692d82eb99e69034ea551f174b177f5b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_615e3fd586ca80fe60da455ff56d41692d82eb99e69034ea551f174b177f5b4f->leave($__internal_615e3fd586ca80fe60da455ff56d41692d82eb99e69034ea551f174b177f5b4f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6b35d0921e832a24de84d7c02f5b843b0f16df17b0a9b6ed836eadf76054759 = $this->env->getExtension("native_profiler");
        $__internal_a6b35d0921e832a24de84d7c02f5b843b0f16df17b0a9b6ed836eadf76054759->enter($__internal_a6b35d0921e832a24de84d7c02f5b843b0f16df17b0a9b6ed836eadf76054759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6b35d0921e832a24de84d7c02f5b843b0f16df17b0a9b6ed836eadf76054759->leave($__internal_a6b35d0921e832a24de84d7c02f5b843b0f16df17b0a9b6ed836eadf76054759_prof);

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
