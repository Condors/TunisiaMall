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
        $__internal_17ed37fea5c29e89ef5c7429503033866c8956db2d2f5aba08fbd79191bfc971 = $this->env->getExtension("native_profiler");
        $__internal_17ed37fea5c29e89ef5c7429503033866c8956db2d2f5aba08fbd79191bfc971->enter($__internal_17ed37fea5c29e89ef5c7429503033866c8956db2d2f5aba08fbd79191bfc971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/SimpleVisitor/my-account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17ed37fea5c29e89ef5c7429503033866c8956db2d2f5aba08fbd79191bfc971->leave($__internal_17ed37fea5c29e89ef5c7429503033866c8956db2d2f5aba08fbd79191bfc971_prof);

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
