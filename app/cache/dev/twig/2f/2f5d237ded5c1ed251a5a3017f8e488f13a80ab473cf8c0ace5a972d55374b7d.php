<?php

/* @CondorsTnMall/Registration/checkEmail.html.twig */
class __TwigTemplate_f63804d06cb54a318ab7caeafdbdfa2de452834454c6d8fd393c2eafab224500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38a3547d7de09b3fa6086c27065b2652219a2ef995a63b78eca240eeb5f9bb00 = $this->env->getExtension("native_profiler");
        $__internal_38a3547d7de09b3fa6086c27065b2652219a2ef995a63b78eca240eeb5f9bb00->enter($__internal_38a3547d7de09b3fa6086c27065b2652219a2ef995a63b78eca240eeb5f9bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a3547d7de09b3fa6086c27065b2652219a2ef995a63b78eca240eeb5f9bb00->leave($__internal_38a3547d7de09b3fa6086c27065b2652219a2ef995a63b78eca240eeb5f9bb00_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28a6df861d3d8846b42e03c245407c4fbdada85d0684d6681289e110f18b2aaf = $this->env->getExtension("native_profiler");
        $__internal_28a6df861d3d8846b42e03c245407c4fbdada85d0684d6681289e110f18b2aaf->enter($__internal_28a6df861d3d8846b42e03c245407c4fbdada85d0684d6681289e110f18b2aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_28a6df861d3d8846b42e03c245407c4fbdada85d0684d6681289e110f18b2aaf->leave($__internal_28a6df861d3d8846b42e03c245407c4fbdada85d0684d6681289e110f18b2aaf_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
