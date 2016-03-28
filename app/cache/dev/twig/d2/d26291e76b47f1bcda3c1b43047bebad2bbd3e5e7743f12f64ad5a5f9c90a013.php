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
        $__internal_b3ab27f0f4d91f6f8bd6af1f22bec1197c8df658a44de4e546ce92852f4aa2ff = $this->env->getExtension("native_profiler");
        $__internal_b3ab27f0f4d91f6f8bd6af1f22bec1197c8df658a44de4e546ce92852f4aa2ff->enter($__internal_b3ab27f0f4d91f6f8bd6af1f22bec1197c8df658a44de4e546ce92852f4aa2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ab27f0f4d91f6f8bd6af1f22bec1197c8df658a44de4e546ce92852f4aa2ff->leave($__internal_b3ab27f0f4d91f6f8bd6af1f22bec1197c8df658a44de4e546ce92852f4aa2ff_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_46d6ef5d6fed4a56a629e3a6b4d9f9647af1623a8199ca8608802b648c0d6133 = $this->env->getExtension("native_profiler");
        $__internal_46d6ef5d6fed4a56a629e3a6b4d9f9647af1623a8199ca8608802b648c0d6133->enter($__internal_46d6ef5d6fed4a56a629e3a6b4d9f9647af1623a8199ca8608802b648c0d6133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_46d6ef5d6fed4a56a629e3a6b4d9f9647af1623a8199ca8608802b648c0d6133->leave($__internal_46d6ef5d6fed4a56a629e3a6b4d9f9647af1623a8199ca8608802b648c0d6133_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_29114fdaa7836ae4a04dc49eb05327120b4523d8e7ab16913466d2a66488b577 = $this->env->getExtension("native_profiler");
        $__internal_29114fdaa7836ae4a04dc49eb05327120b4523d8e7ab16913466d2a66488b577->enter($__internal_29114fdaa7836ae4a04dc49eb05327120b4523d8e7ab16913466d2a66488b577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_29114fdaa7836ae4a04dc49eb05327120b4523d8e7ab16913466d2a66488b577->leave($__internal_29114fdaa7836ae4a04dc49eb05327120b4523d8e7ab16913466d2a66488b577_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1629158a51589aa7bac55bd2a072ed7bc07b91ca6bde19661425bd97820829d4 = $this->env->getExtension("native_profiler");
        $__internal_1629158a51589aa7bac55bd2a072ed7bc07b91ca6bde19661425bd97820829d4->enter($__internal_1629158a51589aa7bac55bd2a072ed7bc07b91ca6bde19661425bd97820829d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_1629158a51589aa7bac55bd2a072ed7bc07b91ca6bde19661425bd97820829d4->leave($__internal_1629158a51589aa7bac55bd2a072ed7bc07b91ca6bde19661425bd97820829d4_prof);

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
