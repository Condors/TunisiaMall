<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_89a41aa1a5ac106990fe6192e4a52c4b3cfde90ef110db0facdfa9f9e519414d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50629f81785e034c86dac61507ccf1106fd3447c8f8fb146d4c7dfc8b61c3597 = $this->env->getExtension("native_profiler");
        $__internal_50629f81785e034c86dac61507ccf1106fd3447c8f8fb146d4c7dfc8b61c3597->enter($__internal_50629f81785e034c86dac61507ccf1106fd3447c8f8fb146d4c7dfc8b61c3597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50629f81785e034c86dac61507ccf1106fd3447c8f8fb146d4c7dfc8b61c3597->leave($__internal_50629f81785e034c86dac61507ccf1106fd3447c8f8fb146d4c7dfc8b61c3597_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2f06f78afc107f749153c48c2dd5033ed60eb2074a30478f85bca5a64190579 = $this->env->getExtension("native_profiler");
        $__internal_a2f06f78afc107f749153c48c2dd5033ed60eb2074a30478f85bca5a64190579->enter($__internal_a2f06f78afc107f749153c48c2dd5033ed60eb2074a30478f85bca5a64190579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    
    
    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
           
    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            

    <input class=\"button\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
            
</form>
    
      <br><br><br><br>  <br><br><br><br>
    
    
";
        
        $__internal_a2f06f78afc107f749153c48c2dd5033ed60eb2074a30478f85bca5a64190579->leave($__internal_a2f06f78afc107f749153c48c2dd5033ed60eb2074a30478f85bca5a64190579_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  70 => 17,  65 => 15,  61 => 14,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
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
/*             */
/* </form>*/
/*     */
/*       <br><br><br><br>  <br><br><br><br>*/
/*     */
/*     */
/* {% endblock fos_user_content %}*/
/* */
