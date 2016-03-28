<?php

/* @CondorsTnMall/Security/login.html.twig */
class __TwigTemplate_e01fbb1bbe06992e02eb7c45d802d3efe5eb68c3160fd950e134563b57b814dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "@CondorsTnMall/Security/login.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
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
        $__internal_ab078869e5086cfb9587049a2bb726d47770ce9fdb526280c7f07d23eba5ab00 = $this->env->getExtension("native_profiler");
        $__internal_ab078869e5086cfb9587049a2bb726d47770ce9fdb526280c7f07d23eba5ab00->enter($__internal_ab078869e5086cfb9587049a2bb726d47770ce9fdb526280c7f07d23eba5ab00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab078869e5086cfb9587049a2bb726d47770ce9fdb526280c7f07d23eba5ab00->leave($__internal_ab078869e5086cfb9587049a2bb726d47770ce9fdb526280c7f07d23eba5ab00_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_979016b799773ae3c2a424ec917f80ad1bdb3ec3271e7ae0c162e255ce3b4a69 = $this->env->getExtension("native_profiler");
        $__internal_979016b799773ae3c2a424ec917f80ad1bdb3ec3271e7ae0c162e255ce3b4a69->enter($__internal_979016b799773ae3c2a424ec917f80ad1bdb3ec3271e7ae0c162e255ce3b4a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <h1 class=\"page-title\">My Account</h1>
";
        
        $__internal_979016b799773ae3c2a424ec917f80ad1bdb3ec3271e7ae0c162e255ce3b4a69->leave($__internal_979016b799773ae3c2a424ec917f80ad1bdb3ec3271e7ae0c162e255ce3b4a69_prof);

    }

    // line 8
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_17a2c45a3fbe77086ca2347a22f19fbc0479cc3abf839f83f9def844abcf789e = $this->env->getExtension("native_profiler");
        $__internal_17a2c45a3fbe77086ca2347a22f19fbc0479cc3abf839f83f9def844abcf789e->enter($__internal_17a2c45a3fbe77086ca2347a22f19fbc0479cc3abf839f83f9def844abcf789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Login</h2>";
        
        $__internal_17a2c45a3fbe77086ca2347a22f19fbc0479cc3abf839f83f9def844abcf789e->leave($__internal_17a2c45a3fbe77086ca2347a22f19fbc0479cc3abf839f83f9def844abcf789e_prof);

    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea4e79417e93d7f04c5b84edc2a3f0ff873f1583b0588496786753eed741742d = $this->env->getExtension("native_profiler");
        $__internal_ea4e79417e93d7f04c5b84edc2a3f0ff873f1583b0588496786753eed741742d->enter($__internal_ea4e79417e93d7f04c5b84edc2a3f0ff873f1583b0588496786753eed741742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "
<form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    
    
    <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
           
    <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            

    <input class=\"button\"  type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    
    <br><br><br>
    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Forgot password ?</a>
    
            
</form>

      <br><br><br><br>  <br><br><br><br>
    
    
";
        
        $__internal_ea4e79417e93d7f04c5b84edc2a3f0ff873f1583b0588496786753eed741742d->leave($__internal_ea4e79417e93d7f04c5b84edc2a3f0ff873f1583b0588496786753eed741742d_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  105 => 26,  98 => 22,  93 => 20,  89 => 19,  83 => 16,  79 => 15,  76 => 14,  70 => 12,  68 => 11,  62 => 10,  50 => 8,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <h1 class="page-title">My Account</h1>*/
/* {% endblock pageTitle %}*/
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
