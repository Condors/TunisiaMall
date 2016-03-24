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
        $__internal_93554a25f139dc0ff2f4219a68ae8f36f687b9365a5d91db4ce7456075d3e043 = $this->env->getExtension("native_profiler");
        $__internal_93554a25f139dc0ff2f4219a68ae8f36f687b9365a5d91db4ce7456075d3e043->enter($__internal_93554a25f139dc0ff2f4219a68ae8f36f687b9365a5d91db4ce7456075d3e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93554a25f139dc0ff2f4219a68ae8f36f687b9365a5d91db4ce7456075d3e043->leave($__internal_93554a25f139dc0ff2f4219a68ae8f36f687b9365a5d91db4ce7456075d3e043_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcbf49fa68f56ea1969cf83fe99a336c1f1f981920cd968e05a0f354a74e3217 = $this->env->getExtension("native_profiler");
        $__internal_fcbf49fa68f56ea1969cf83fe99a336c1f1f981920cd968e05a0f354a74e3217->enter($__internal_fcbf49fa68f56ea1969cf83fe99a336c1f1f981920cd968e05a0f354a74e3217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fcbf49fa68f56ea1969cf83fe99a336c1f1f981920cd968e05a0f354a74e3217->leave($__internal_fcbf49fa68f56ea1969cf83fe99a336c1f1f981920cd968e05a0f354a74e3217_prof);

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
