<?php

/* CondorsTnMallBundle:Responsable:index.html.twig */
class __TwigTemplate_fede3fd51ffd9069a95c1616af37fffc39df8d05f8d4cd7b4204a3c79bfdacce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "CondorsTnMallBundle:Responsable:index.html.twig", 1);
        $this->blocks = array(
            'quickProfile' => array($this, 'block_quickProfile'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37f45967dcc72cef1c74fe54e9791168706803a54fadd523ac5ee49cd1bc3488 = $this->env->getExtension("native_profiler");
        $__internal_37f45967dcc72cef1c74fe54e9791168706803a54fadd523ac5ee49cd1bc3488->enter($__internal_37f45967dcc72cef1c74fe54e9791168706803a54fadd523ac5ee49cd1bc3488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f45967dcc72cef1c74fe54e9791168706803a54fadd523ac5ee49cd1bc3488->leave($__internal_37f45967dcc72cef1c74fe54e9791168706803a54fadd523ac5ee49cd1bc3488_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_808ff93af2a74ad520ef9430186986ed00295fd1edc668a8f1ee0439d89c6b56 = $this->env->getExtension("native_profiler");
        $__internal_808ff93af2a74ad520ef9430186986ed00295fd1edc668a8f1ee0439d89c6b56->enter($__internal_808ff93af2a74ad520ef9430186986ed00295fd1edc668a8f1ee0439d89c6b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_808ff93af2a74ad520ef9430186986ed00295fd1edc668a8f1ee0439d89c6b56->leave($__internal_808ff93af2a74ad520ef9430186986ed00295fd1edc668a8f1ee0439d89c6b56_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_158a6d4ff4b147cf1605e3c9362443299c8ef453c8f452e68c0c919b4fa547a0 = $this->env->getExtension("native_profiler");
        $__internal_158a6d4ff4b147cf1605e3c9362443299c8ef453c8f452e68c0c919b4fa547a0->enter($__internal_158a6d4ff4b147cf1605e3c9362443299c8ef453c8f452e68c0c919b4fa547a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_158a6d4ff4b147cf1605e3c9362443299c8ef453c8f452e68c0c919b4fa547a0->leave($__internal_158a6d4ff4b147cf1605e3c9362443299c8ef453c8f452e68c0c919b4fa547a0_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cdcd26ab6c23605829ca3e5f25305776a759c34b2b7d43c5eef5d608517a60e3 = $this->env->getExtension("native_profiler");
        $__internal_cdcd26ab6c23605829ca3e5f25305776a759c34b2b7d43c5eef5d608517a60e3->enter($__internal_cdcd26ab6c23605829ca3e5f25305776a759c34b2b7d43c5eef5d608517a60e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_cdcd26ab6c23605829ca3e5f25305776a759c34b2b7d43c5eef5d608517a60e3->leave($__internal_cdcd26ab6c23605829ca3e5f25305776a759c34b2b7d43c5eef5d608517a60e3_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  61 => 12,  58 => 11,  52 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig" %}*/
/* */
/* */
/* {%block quickProfile %}*/
/*     {{ include('CondorsTnMallBundle::Responsable/quickProfile.html.twig') }} */
/* {%endblock quickProfile %}*/
/* */
/* */
/* */
/* {% block nav_menu %}*/
/* */
/* {{ include('CondorsTnMallBundle::Responsable/navMenu.html.twig') }} */
/* */
/* {%endblock nav_menu%}*/
/* */
/* */
/*  {% block footer %}*/
/*   {{ include('CondorsTnMallBundle::Responsable/footer.html.twig') }} */
/* {% endblock footer %}*/
