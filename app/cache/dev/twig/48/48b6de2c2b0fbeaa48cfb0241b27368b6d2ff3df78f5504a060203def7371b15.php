<?php

/* @CondorsTnMall/Registration/register_content.html.twig */
class __TwigTemplate_7ce4f69ceb8ce0d5894a747d5778d1d7feac4e616dd6148aa19afcfc133ae6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "@CondorsTnMall/Registration/register_content.html.twig", 1);
        $this->blocks = array(
            'titleTop' => array($this, 'block_titleTop'),
            'registerUser' => array($this, 'block_registerUser'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df2960c71e2ca99f8ae03bf52d288c223fa554d7b54fb90071be0b2f1d2829c2 = $this->env->getExtension("native_profiler");
        $__internal_df2960c71e2ca99f8ae03bf52d288c223fa554d7b54fb90071be0b2f1d2829c2->enter($__internal_df2960c71e2ca99f8ae03bf52d288c223fa554d7b54fb90071be0b2f1d2829c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2960c71e2ca99f8ae03bf52d288c223fa554d7b54fb90071be0b2f1d2829c2->leave($__internal_df2960c71e2ca99f8ae03bf52d288c223fa554d7b54fb90071be0b2f1d2829c2_prof);

    }

    // line 5
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_1ed579b81babd999e846f6154e53bbe330ab47898804d2c34d92a7273455132e = $this->env->getExtension("native_profiler");
        $__internal_1ed579b81babd999e846f6154e53bbe330ab47898804d2c34d92a7273455132e->enter($__internal_1ed579b81babd999e846f6154e53bbe330ab47898804d2c34d92a7273455132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Register</h2>";
        
        $__internal_1ed579b81babd999e846f6154e53bbe330ab47898804d2c34d92a7273455132e->leave($__internal_1ed579b81babd999e846f6154e53bbe330ab47898804d2c34d92a7273455132e_prof);

    }

    // line 7
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_63fce1cd723c5a8b2ef4ec1209574bf9b2c244986e90acaa7146c63e5ea4da25 = $this->env->getExtension("native_profiler");
        $__internal_63fce1cd723c5a8b2ef4ec1209574bf9b2c244986e90acaa7146c63e5ea4da25->enter($__internal_63fce1cd723c5a8b2ef4ec1209574bf9b2c244986e90acaa7146c63e5ea4da25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

        // line 9
        echo "


";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" class=\"button\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
        
";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
      <br><br><br><br>  <br><br><br><br>
      
  ";
        
        $__internal_63fce1cd723c5a8b2ef4ec1209574bf9b2c244986e90acaa7146c63e5ea4da25->leave($__internal_63fce1cd723c5a8b2ef4ec1209574bf9b2c244986e90acaa7146c63e5ea4da25_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  67 => 15,  62 => 13,  58 => 12,  53 => 9,  47 => 7,  35 => 5,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* */
/* */
/* {% block titleTop %}<h2 class="title-heading">Register</h2>{% endblock %}*/
/* */
/* {% block registerUser %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* {{ form_start(form, {'method': 'post', 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" class="button" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/*         */
/* {{ form_end(form) }}*/
/*     */
/*       <br><br><br><br>  <br><br><br><br>*/
/*       */
/*   {% endblock %}*/
/* */
/* */
