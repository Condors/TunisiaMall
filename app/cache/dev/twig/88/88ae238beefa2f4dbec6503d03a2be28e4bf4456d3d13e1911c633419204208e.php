<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_105a08766a8ce5a2ac7a302b461238e9692a79270d7c314d9f516bcc1243fa1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
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
        $__internal_3068abbf3df96399bd535dc4b7a307e5b001c760fc2711222cdfeadef0caccb6 = $this->env->getExtension("native_profiler");
        $__internal_3068abbf3df96399bd535dc4b7a307e5b001c760fc2711222cdfeadef0caccb6->enter($__internal_3068abbf3df96399bd535dc4b7a307e5b001c760fc2711222cdfeadef0caccb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3068abbf3df96399bd535dc4b7a307e5b001c760fc2711222cdfeadef0caccb6->leave($__internal_3068abbf3df96399bd535dc4b7a307e5b001c760fc2711222cdfeadef0caccb6_prof);

    }

    // line 5
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_d9d47d775156dd81e3726814e361b7a004726e3dc88db22f1b4c210e14f81f77 = $this->env->getExtension("native_profiler");
        $__internal_d9d47d775156dd81e3726814e361b7a004726e3dc88db22f1b4c210e14f81f77->enter($__internal_d9d47d775156dd81e3726814e361b7a004726e3dc88db22f1b4c210e14f81f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Register</h2>";
        
        $__internal_d9d47d775156dd81e3726814e361b7a004726e3dc88db22f1b4c210e14f81f77->leave($__internal_d9d47d775156dd81e3726814e361b7a004726e3dc88db22f1b4c210e14f81f77_prof);

    }

    // line 7
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_c48a35ac5ace063e70a059a2fb14e6b5715e2525f01adc800300dfd8ed82b156 = $this->env->getExtension("native_profiler");
        $__internal_c48a35ac5ace063e70a059a2fb14e6b5715e2525f01adc800300dfd8ed82b156->enter($__internal_c48a35ac5ace063e70a059a2fb14e6b5715e2525f01adc800300dfd8ed82b156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

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
        
        $__internal_c48a35ac5ace063e70a059a2fb14e6b5715e2525f01adc800300dfd8ed82b156->leave($__internal_c48a35ac5ace063e70a059a2fb14e6b5715e2525f01adc800300dfd8ed82b156_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
