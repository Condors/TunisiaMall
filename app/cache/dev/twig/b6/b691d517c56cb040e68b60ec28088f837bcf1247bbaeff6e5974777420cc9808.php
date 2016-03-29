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
        $__internal_d88d4457006111887b9207060d2df81b2b70d970a721eb622977f0cc7ae6eccb = $this->env->getExtension("native_profiler");
        $__internal_d88d4457006111887b9207060d2df81b2b70d970a721eb622977f0cc7ae6eccb->enter($__internal_d88d4457006111887b9207060d2df81b2b70d970a721eb622977f0cc7ae6eccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88d4457006111887b9207060d2df81b2b70d970a721eb622977f0cc7ae6eccb->leave($__internal_d88d4457006111887b9207060d2df81b2b70d970a721eb622977f0cc7ae6eccb_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_8724466784f86200d982d63a8e81527baac203cb36c85f7c726c94aa8c8f088d = $this->env->getExtension("native_profiler");
        $__internal_8724466784f86200d982d63a8e81527baac203cb36c85f7c726c94aa8c8f088d->enter($__internal_8724466784f86200d982d63a8e81527baac203cb36c85f7c726c94aa8c8f088d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <h1 class=\"page-title\">My Account</h1>
";
        
        $__internal_8724466784f86200d982d63a8e81527baac203cb36c85f7c726c94aa8c8f088d->leave($__internal_8724466784f86200d982d63a8e81527baac203cb36c85f7c726c94aa8c8f088d_prof);

    }

    // line 8
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_b0aaa6d8d3ede97dbdf5cb961d13d5ff89b8db3ea4e122bd1691ff5c82ce5673 = $this->env->getExtension("native_profiler");
        $__internal_b0aaa6d8d3ede97dbdf5cb961d13d5ff89b8db3ea4e122bd1691ff5c82ce5673->enter($__internal_b0aaa6d8d3ede97dbdf5cb961d13d5ff89b8db3ea4e122bd1691ff5c82ce5673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Login</h2>";
        
        $__internal_b0aaa6d8d3ede97dbdf5cb961d13d5ff89b8db3ea4e122bd1691ff5c82ce5673->leave($__internal_b0aaa6d8d3ede97dbdf5cb961d13d5ff89b8db3ea4e122bd1691ff5c82ce5673_prof);

    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4939e49632ad2741dfa35aed943a5a9351752b2f1ecaa48cd16fa47f1ba094bf = $this->env->getExtension("native_profiler");
        $__internal_4939e49632ad2741dfa35aed943a5a9351752b2f1ecaa48cd16fa47f1ba094bf->enter($__internal_4939e49632ad2741dfa35aed943a5a9351752b2f1ecaa48cd16fa47f1ba094bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4939e49632ad2741dfa35aed943a5a9351752b2f1ecaa48cd16fa47f1ba094bf->leave($__internal_4939e49632ad2741dfa35aed943a5a9351752b2f1ecaa48cd16fa47f1ba094bf_prof);

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
