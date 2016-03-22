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
        $__internal_77ec28e75dd0ec7cfefdb831279f3cc2322e49e771f27c1933cb626f00402f99 = $this->env->getExtension("native_profiler");
        $__internal_77ec28e75dd0ec7cfefdb831279f3cc2322e49e771f27c1933cb626f00402f99->enter($__internal_77ec28e75dd0ec7cfefdb831279f3cc2322e49e771f27c1933cb626f00402f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ec28e75dd0ec7cfefdb831279f3cc2322e49e771f27c1933cb626f00402f99->leave($__internal_77ec28e75dd0ec7cfefdb831279f3cc2322e49e771f27c1933cb626f00402f99_prof);

    }

    // line 5
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_591f11b33c70ec855dcee8eda71ba696027b2d55d3697ec96f239e032d422913 = $this->env->getExtension("native_profiler");
        $__internal_591f11b33c70ec855dcee8eda71ba696027b2d55d3697ec96f239e032d422913->enter($__internal_591f11b33c70ec855dcee8eda71ba696027b2d55d3697ec96f239e032d422913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Register</h2>";
        
        $__internal_591f11b33c70ec855dcee8eda71ba696027b2d55d3697ec96f239e032d422913->leave($__internal_591f11b33c70ec855dcee8eda71ba696027b2d55d3697ec96f239e032d422913_prof);

    }

    // line 7
    public function block_registerUser($context, array $blocks = array())
    {
        $__internal_54d1c3a467fffb9e5e0703b31eac242e2a5c23517039db696e0e53fca1c328aa = $this->env->getExtension("native_profiler");
        $__internal_54d1c3a467fffb9e5e0703b31eac242e2a5c23517039db696e0e53fca1c328aa->enter($__internal_54d1c3a467fffb9e5e0703b31eac242e2a5c23517039db696e0e53fca1c328aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registerUser"));

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
        
        $__internal_54d1c3a467fffb9e5e0703b31eac242e2a5c23517039db696e0e53fca1c328aa->leave($__internal_54d1c3a467fffb9e5e0703b31eac242e2a5c23517039db696e0e53fca1c328aa_prof);

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
