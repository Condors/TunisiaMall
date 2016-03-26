<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_0ea7ee00a494afbb60a7982e141fa5718308e89b9a13ad28aa0804e7b04a8343 extends Twig_Template
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
        $__internal_c5741ddc7ffad43c2c44bfaba09667bc3b0e302eb2d4770aed086987a0bb82bf = $this->env->getExtension("native_profiler");
        $__internal_c5741ddc7ffad43c2c44bfaba09667bc3b0e302eb2d4770aed086987a0bb82bf->enter($__internal_c5741ddc7ffad43c2c44bfaba09667bc3b0e302eb2d4770aed086987a0bb82bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c5741ddc7ffad43c2c44bfaba09667bc3b0e302eb2d4770aed086987a0bb82bf->leave($__internal_c5741ddc7ffad43c2c44bfaba09667bc3b0e302eb2d4770aed086987a0bb82bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
