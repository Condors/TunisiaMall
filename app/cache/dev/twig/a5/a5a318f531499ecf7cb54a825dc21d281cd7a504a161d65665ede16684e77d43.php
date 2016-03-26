<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_65fc3ce54bfeec090c6713278a190e2bc0f1bc1122c124650a94ea9bf91edb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_ab2be9dc6029c79854e6c412f505af5e39dc835f491d8baa5fc714c776704073 = $this->env->getExtension("native_profiler");
        $__internal_ab2be9dc6029c79854e6c412f505af5e39dc835f491d8baa5fc714c776704073->enter($__internal_ab2be9dc6029c79854e6c412f505af5e39dc835f491d8baa5fc714c776704073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab2be9dc6029c79854e6c412f505af5e39dc835f491d8baa5fc714c776704073->leave($__internal_ab2be9dc6029c79854e6c412f505af5e39dc835f491d8baa5fc714c776704073_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_258eba9887a4595efeb23ae0e60fca5884c7f82d8b0aa2f3c72df3dfccbf214f = $this->env->getExtension("native_profiler");
        $__internal_258eba9887a4595efeb23ae0e60fca5884c7f82d8b0aa2f3c72df3dfccbf214f->enter($__internal_258eba9887a4595efeb23ae0e60fca5884c7f82d8b0aa2f3c72df3dfccbf214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_258eba9887a4595efeb23ae0e60fca5884c7f82d8b0aa2f3c72df3dfccbf214f->leave($__internal_258eba9887a4595efeb23ae0e60fca5884c7f82d8b0aa2f3c72df3dfccbf214f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
