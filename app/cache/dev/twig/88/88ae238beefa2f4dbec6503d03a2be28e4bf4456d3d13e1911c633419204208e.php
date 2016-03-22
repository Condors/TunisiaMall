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
        $__internal_706c9de87165cdbb6f88f63c55c89482e0aa7bdee16c8210e7ccf524461774e4 = $this->env->getExtension("native_profiler");
        $__internal_706c9de87165cdbb6f88f63c55c89482e0aa7bdee16c8210e7ccf524461774e4->enter($__internal_706c9de87165cdbb6f88f63c55c89482e0aa7bdee16c8210e7ccf524461774e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_706c9de87165cdbb6f88f63c55c89482e0aa7bdee16c8210e7ccf524461774e4->leave($__internal_706c9de87165cdbb6f88f63c55c89482e0aa7bdee16c8210e7ccf524461774e4_prof);

    }

    // line 5
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_c05de07125cfa5bff9feb7e6444e061b60d2283bd9c7ca50e5a54c3e9362623a = $this->env->getExtension("native_profiler");
        $__internal_c05de07125cfa5bff9feb7e6444e061b60d2283bd9c7ca50e5a54c3e9362623a->enter($__internal_c05de07125cfa5bff9feb7e6444e061b60d2283bd9c7ca50e5a54c3e9362623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Register</h2>";
        
        $__internal_c05de07125cfa5bff9feb7e6444e061b60d2283bd9c7ca50e5a54c3e9362623a->leave($__internal_c05de07125cfa5bff9feb7e6444e061b60d2283bd9c7ca50e5a54c3e9362623a_prof);

    }

    // line 7
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_936020c54ca71b3a9a8498eae6fb3a6a35f76a6d90457e45406d095999dc4bcf = $this->env->getExtension("native_profiler");
        $__internal_936020c54ca71b3a9a8498eae6fb3a6a35f76a6d90457e45406d095999dc4bcf->enter($__internal_936020c54ca71b3a9a8498eae6fb3a6a35f76a6d90457e45406d095999dc4bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

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
        
        $__internal_936020c54ca71b3a9a8498eae6fb3a6a35f76a6d90457e45406d095999dc4bcf->leave($__internal_936020c54ca71b3a9a8498eae6fb3a6a35f76a6d90457e45406d095999dc4bcf_prof);

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
