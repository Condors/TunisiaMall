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
        $__internal_ffa0516e0a24d41f8e48cdbff8bb10f19bbf51dab4fd8f42c166071bad44afee = $this->env->getExtension("native_profiler");
        $__internal_ffa0516e0a24d41f8e48cdbff8bb10f19bbf51dab4fd8f42c166071bad44afee->enter($__internal_ffa0516e0a24d41f8e48cdbff8bb10f19bbf51dab4fd8f42c166071bad44afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa0516e0a24d41f8e48cdbff8bb10f19bbf51dab4fd8f42c166071bad44afee->leave($__internal_ffa0516e0a24d41f8e48cdbff8bb10f19bbf51dab4fd8f42c166071bad44afee_prof);

    }

    // line 5
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_58d8b2ef2fe1d95df5a775cb9121bcb2cc2f324a9786d4de38f099c63f1c431a = $this->env->getExtension("native_profiler");
        $__internal_58d8b2ef2fe1d95df5a775cb9121bcb2cc2f324a9786d4de38f099c63f1c431a->enter($__internal_58d8b2ef2fe1d95df5a775cb9121bcb2cc2f324a9786d4de38f099c63f1c431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Register</h2>";
        
        $__internal_58d8b2ef2fe1d95df5a775cb9121bcb2cc2f324a9786d4de38f099c63f1c431a->leave($__internal_58d8b2ef2fe1d95df5a775cb9121bcb2cc2f324a9786d4de38f099c63f1c431a_prof);

    }

    // line 7
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_38582f4ad10c2ceb2de6b4b12aeb4071ac1205de8cdcabde99c7a46e43fe134e = $this->env->getExtension("native_profiler");
        $__internal_38582f4ad10c2ceb2de6b4b12aeb4071ac1205de8cdcabde99c7a46e43fe134e->enter($__internal_38582f4ad10c2ceb2de6b4b12aeb4071ac1205de8cdcabde99c7a46e43fe134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

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
        
        $__internal_38582f4ad10c2ceb2de6b4b12aeb4071ac1205de8cdcabde99c7a46e43fe134e->leave($__internal_38582f4ad10c2ceb2de6b4b12aeb4071ac1205de8cdcabde99c7a46e43fe134e_prof);

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
