<?php

/* CondorsTnMallBundle:Security:login.html.twig */
class __TwigTemplate_89a41aa1a5ac106990fe6192e4a52c4b3cfde90ef110db0facdfa9f9e519414d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "CondorsTnMallBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'titleTop' => array($this, 'block_titleTop'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_605899cba6186ba88aaa50eb14999a82456f2bc2cf2a08fcbc014243a1adfe8a = $this->env->getExtension("native_profiler");
        $__internal_605899cba6186ba88aaa50eb14999a82456f2bc2cf2a08fcbc014243a1adfe8a->enter($__internal_605899cba6186ba88aaa50eb14999a82456f2bc2cf2a08fcbc014243a1adfe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605899cba6186ba88aaa50eb14999a82456f2bc2cf2a08fcbc014243a1adfe8a->leave($__internal_605899cba6186ba88aaa50eb14999a82456f2bc2cf2a08fcbc014243a1adfe8a_prof);

    }

    // line 4
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_135e50f67e8482528e06085360a879fc1e97266b0e2b380a05085396992a4ea4 = $this->env->getExtension("native_profiler");
        $__internal_135e50f67e8482528e06085360a879fc1e97266b0e2b380a05085396992a4ea4->enter($__internal_135e50f67e8482528e06085360a879fc1e97266b0e2b380a05085396992a4ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Login</h2>";
        
        $__internal_135e50f67e8482528e06085360a879fc1e97266b0e2b380a05085396992a4ea4->leave($__internal_135e50f67e8482528e06085360a879fc1e97266b0e2b380a05085396992a4ea4_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bce8b5607111e89673f6c6d73310a22de5e10f30fe35fb95994f0c7f54b71a5b = $this->env->getExtension("native_profiler");
        $__internal_bce8b5607111e89673f6c6d73310a22de5e10f30fe35fb95994f0c7f54b71a5b->enter($__internal_bce8b5607111e89673f6c6d73310a22de5e10f30fe35fb95994f0c7f54b71a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    
    
    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
           
    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            

    <input class=\"button\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
    <br><br><br>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password ?</a>
    
            
</form>

      <br><br><br><br>  <br><br><br><br>
    
    
";
        
        $__internal_bce8b5607111e89673f6c6d73310a22de5e10f30fe35fb95994f0c7f54b71a5b->leave($__internal_bce8b5607111e89673f6c6d73310a22de5e10f30fe35fb95994f0c7f54b71a5b_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  90 => 22,  83 => 18,  78 => 16,  74 => 15,  68 => 12,  64 => 11,  61 => 10,  55 => 8,  53 => 7,  47 => 6,  35 => 4,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block titleTop %}<h2 class="title-heading">Login</h2>{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     */
/*     */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/*            */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/*             */
/* */
/*     <input class="button"  type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/*     */
/*     <br><br><br>*/
/*     <a href="{{ path('fos_user_resetting_request') }}">Forgot password ?</a>*/
/*     */
/*             */
/* </form>*/
/* */
/*       <br><br><br><br>  <br><br><br><br>*/
/*     */
/*     */
/* {% endblock fos_user_content %}*/
/* */
