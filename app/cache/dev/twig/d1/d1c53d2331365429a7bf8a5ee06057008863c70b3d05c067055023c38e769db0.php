<?php

/* @CondorsTnMall/SimpleVisitor/my-account.html.twig */
class __TwigTemplate_2d52298a42000cd9fcd2c4a3b17d47c1fff678d4b5e74bb15bb1b469ae50163d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "@CondorsTnMall/SimpleVisitor/my-account.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c706ef3af274e40d5beead08c86f24e687d8388f2d799dfe652e87ccea25b1ef = $this->env->getExtension("native_profiler");
        $__internal_c706ef3af274e40d5beead08c86f24e687d8388f2d799dfe652e87ccea25b1ef->enter($__internal_c706ef3af274e40d5beead08c86f24e687d8388f2d799dfe652e87ccea25b1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/SimpleVisitor/my-account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c706ef3af274e40d5beead08c86f24e687d8388f2d799dfe652e87ccea25b1ef->leave($__internal_c706ef3af274e40d5beead08c86f24e687d8388f2d799dfe652e87ccea25b1ef_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/SimpleVisitor/my-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* */
