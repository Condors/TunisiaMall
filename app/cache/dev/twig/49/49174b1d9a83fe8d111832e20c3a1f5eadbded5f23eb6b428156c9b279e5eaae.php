<?php

/* @CondorsTnMall/Registration/confirmed.html.twig */
class __TwigTemplate_289047a65e2d186780946585a91c5dfeed024ce9b01cba179060936fd16a91c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/confirmed.html.twig", 1);
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
        $__internal_496368bf8c485094345e33049e945a562e4294add93f8f94987eaf918ff6ddc6 = $this->env->getExtension("native_profiler");
        $__internal_496368bf8c485094345e33049e945a562e4294add93f8f94987eaf918ff6ddc6->enter($__internal_496368bf8c485094345e33049e945a562e4294add93f8f94987eaf918ff6ddc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496368bf8c485094345e33049e945a562e4294add93f8f94987eaf918ff6ddc6->leave($__internal_496368bf8c485094345e33049e945a562e4294add93f8f94987eaf918ff6ddc6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5495eddc1dd7e670cb219b0f2f603dcaabb28e96d845d6d969d03b301bf2ab0a = $this->env->getExtension("native_profiler");
        $__internal_5495eddc1dd7e670cb219b0f2f603dcaabb28e96d845d6d969d03b301bf2ab0a->enter($__internal_5495eddc1dd7e670cb219b0f2f603dcaabb28e96d845d6d969d03b301bf2ab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5495eddc1dd7e670cb219b0f2f603dcaabb28e96d845d6d969d03b301bf2ab0a->leave($__internal_5495eddc1dd7e670cb219b0f2f603dcaabb28e96d845d6d969d03b301bf2ab0a_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/confirmed.html.twig";
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
