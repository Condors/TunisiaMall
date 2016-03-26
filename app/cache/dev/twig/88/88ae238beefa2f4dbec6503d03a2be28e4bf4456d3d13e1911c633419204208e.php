<?php

/* CondorsTnMallBundle:Registration:register_content.html.twig */
class __TwigTemplate_105a08766a8ce5a2ac7a302b461238e9692a79270d7c314d9f516bcc1243fa1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "CondorsTnMallBundle:Registration:register_content.html.twig", 1);
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
        $__internal_106a65e45b351a22e07fc6f79a8d72e2c3cedcb1e652652a99690e1d85100d18 = $this->env->getExtension("native_profiler");
        $__internal_106a65e45b351a22e07fc6f79a8d72e2c3cedcb1e652652a99690e1d85100d18->enter($__internal_106a65e45b351a22e07fc6f79a8d72e2c3cedcb1e652652a99690e1d85100d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_106a65e45b351a22e07fc6f79a8d72e2c3cedcb1e652652a99690e1d85100d18->leave($__internal_106a65e45b351a22e07fc6f79a8d72e2c3cedcb1e652652a99690e1d85100d18_prof);

    }

    // line 5
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_bd4048f2d52046e0e72ec983682cb3742c523a0688ca54d7f3d7ff8aa1e51192 = $this->env->getExtension("native_profiler");
        $__internal_bd4048f2d52046e0e72ec983682cb3742c523a0688ca54d7f3d7ff8aa1e51192->enter($__internal_bd4048f2d52046e0e72ec983682cb3742c523a0688ca54d7f3d7ff8aa1e51192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Register</h2>";
        
        $__internal_bd4048f2d52046e0e72ec983682cb3742c523a0688ca54d7f3d7ff8aa1e51192->leave($__internal_bd4048f2d52046e0e72ec983682cb3742c523a0688ca54d7f3d7ff8aa1e51192_prof);

    }

    // line 7
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_f40b245aff80af9ed4641334e098000431c8cbfff06253243ee35706d61a291f = $this->env->getExtension("native_profiler");
        $__internal_f40b245aff80af9ed4641334e098000431c8cbfff06253243ee35706d61a291f->enter($__internal_f40b245aff80af9ed4641334e098000431c8cbfff06253243ee35706d61a291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

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
        
        $__internal_f40b245aff80af9ed4641334e098000431c8cbfff06253243ee35706d61a291f->leave($__internal_f40b245aff80af9ed4641334e098000431c8cbfff06253243ee35706d61a291f_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Registration:register_content.html.twig";
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
