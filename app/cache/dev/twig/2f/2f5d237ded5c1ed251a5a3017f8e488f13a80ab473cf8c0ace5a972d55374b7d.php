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
        $__internal_db88b3652c7a6c6281f21b5d850afda70758e077d8aad550cb82705b1877afcb = $this->env->getExtension("native_profiler");
        $__internal_db88b3652c7a6c6281f21b5d850afda70758e077d8aad550cb82705b1877afcb->enter($__internal_db88b3652c7a6c6281f21b5d850afda70758e077d8aad550cb82705b1877afcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db88b3652c7a6c6281f21b5d850afda70758e077d8aad550cb82705b1877afcb->leave($__internal_db88b3652c7a6c6281f21b5d850afda70758e077d8aad550cb82705b1877afcb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5697523d2e3cd90ef0a3c869573ee7d0c04faab595e400b68aee3b011ff1228 = $this->env->getExtension("native_profiler");
        $__internal_a5697523d2e3cd90ef0a3c869573ee7d0c04faab595e400b68aee3b011ff1228->enter($__internal_a5697523d2e3cd90ef0a3c869573ee7d0c04faab595e400b68aee3b011ff1228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a5697523d2e3cd90ef0a3c869573ee7d0c04faab595e400b68aee3b011ff1228->leave($__internal_a5697523d2e3cd90ef0a3c869573ee7d0c04faab595e400b68aee3b011ff1228_prof);

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
