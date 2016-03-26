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
        $__internal_5e8f104f616e701144252e48e4f535083acb83ee7a7772d16bb5d8df4dd858af = $this->env->getExtension("native_profiler");
        $__internal_5e8f104f616e701144252e48e4f535083acb83ee7a7772d16bb5d8df4dd858af->enter($__internal_5e8f104f616e701144252e48e4f535083acb83ee7a7772d16bb5d8df4dd858af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e8f104f616e701144252e48e4f535083acb83ee7a7772d16bb5d8df4dd858af->leave($__internal_5e8f104f616e701144252e48e4f535083acb83ee7a7772d16bb5d8df4dd858af_prof);

    }

    // line 4
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_590c133cda6f4c10975847071bd40c19181315e61297c57dc48d59a920971890 = $this->env->getExtension("native_profiler");
        $__internal_590c133cda6f4c10975847071bd40c19181315e61297c57dc48d59a920971890->enter($__internal_590c133cda6f4c10975847071bd40c19181315e61297c57dc48d59a920971890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Login</h2>";
        
        $__internal_590c133cda6f4c10975847071bd40c19181315e61297c57dc48d59a920971890->leave($__internal_590c133cda6f4c10975847071bd40c19181315e61297c57dc48d59a920971890_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce147ea9cbf69cc48416b776116fe7bf5cabea22c52ae3c96b9ae702aa16ef77 = $this->env->getExtension("native_profiler");
        $__internal_ce147ea9cbf69cc48416b776116fe7bf5cabea22c52ae3c96b9ae702aa16ef77->enter($__internal_ce147ea9cbf69cc48416b776116fe7bf5cabea22c52ae3c96b9ae702aa16ef77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ce147ea9cbf69cc48416b776116fe7bf5cabea22c52ae3c96b9ae702aa16ef77->leave($__internal_ce147ea9cbf69cc48416b776116fe7bf5cabea22c52ae3c96b9ae702aa16ef77_prof);

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
