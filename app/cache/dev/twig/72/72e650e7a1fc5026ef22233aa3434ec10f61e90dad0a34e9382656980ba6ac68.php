<?php

/* CondorsTnMallBundle:SimpleVisitor:brands.html.twig */
class __TwigTemplate_288b01e0adb6458b2524169191d4af53d10c39407ba184b41500291516efec46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "CondorsTnMallBundle:SimpleVisitor:brands.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'header' => array($this, 'block_header'),
            'titleTop' => array($this, 'block_titleTop'),
            'brands' => array($this, 'block_brands'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_975428a14c1275ec605681a62025be012ffe776671ff12d5b165ca17277825c4 = $this->env->getExtension("native_profiler");
        $__internal_975428a14c1275ec605681a62025be012ffe776671ff12d5b165ca17277825c4->enter($__internal_975428a14c1275ec605681a62025be012ffe776671ff12d5b165ca17277825c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor:brands.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975428a14c1275ec605681a62025be012ffe776671ff12d5b165ca17277825c4->leave($__internal_975428a14c1275ec605681a62025be012ffe776671ff12d5b165ca17277825c4_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_2034fb6c648273db5aebb3b3782edc63bff37a5d097408cbb97192efb43c0725 = $this->env->getExtension("native_profiler");
        $__internal_2034fb6c648273db5aebb3b3782edc63bff37a5d097408cbb97192efb43c0725->enter($__internal_2034fb6c648273db5aebb3b3782edc63bff37a5d097408cbb97192efb43c0725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <h1 class=\"page-title\"></h1>
";
        
        $__internal_2034fb6c648273db5aebb3b3782edc63bff37a5d097408cbb97192efb43c0725->leave($__internal_2034fb6c648273db5aebb3b3782edc63bff37a5d097408cbb97192efb43c0725_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_dff71f35e9153741a4b75527b1b318560912e8ce643bc645d1194143ee09744b = $this->env->getExtension("native_profiler");
        $__internal_dff71f35e9153741a4b75527b1b318560912e8ce643bc645d1194143ee09744b->enter($__internal_dff71f35e9153741a4b75527b1b318560912e8ce643bc645d1194143ee09744b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig");
        echo " 
";
        
        $__internal_dff71f35e9153741a4b75527b1b318560912e8ce643bc645d1194143ee09744b->leave($__internal_dff71f35e9153741a4b75527b1b318560912e8ce643bc645d1194143ee09744b_prof);

    }

    // line 11
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_e8cb960bf0af3e37b3db193e098743d6572f0011b7df662147dc96b2c222d6e6 = $this->env->getExtension("native_profiler");
        $__internal_e8cb960bf0af3e37b3db193e098743d6572f0011b7df662147dc96b2c222d6e6->enter($__internal_e8cb960bf0af3e37b3db193e098743d6572f0011b7df662147dc96b2c222d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Brands</h2>";
        
        $__internal_e8cb960bf0af3e37b3db193e098743d6572f0011b7df662147dc96b2c222d6e6->leave($__internal_e8cb960bf0af3e37b3db193e098743d6572f0011b7df662147dc96b2c222d6e6_prof);

    }

    // line 17
    public function block_brands($context, array $blocks = array())
    {
        $__internal_d2bc45495851c53f37dfcf8276d56987a106423e8aa1658b66c481e21f5ac720 = $this->env->getExtension("native_profiler");
        $__internal_d2bc45495851c53f37dfcf8276d56987a106423e8aa1658b66c481e21f5ac720->enter($__internal_d2bc45495851c53f37dfcf8276d56987a106423e8aa1658b66c481e21f5ac720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brands"));

        // line 18
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 20
            echo "        <span border=\"1\"> 
            <style>
                .brands-img
                {
                    margin: 50px 50px 50px 50px;

                }
            </style>
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("condors_tn_mall_simple_brands_special", array("id" => $this->getAttribute($context["brand"], "idEnseigne", array()))), "html", null, true);
            echo "\">
                <img class=\"brands-img\" width=\"200\" heigth=\"200\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/pictures/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "imageenseigne", array()), "html", null, true);
            echo "\"/> &nbsp; &nbsp;&nbsp;
            </a>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        
        $__internal_d2bc45495851c53f37dfcf8276d56987a106423e8aa1658b66c481e21f5ac720->leave($__internal_d2bc45495851c53f37dfcf8276d56987a106423e8aa1658b66c481e21f5ac720_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:SimpleVisitor:brands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  106 => 29,  102 => 28,  92 => 20,  88 => 19,  85 => 18,  79 => 17,  67 => 11,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* {% block pageTitle %}*/
/*     <h1 class="page-title"></h1>*/
/* {% endblock pageTitle %}*/
/* */
/* {% block header %}*/
/*     {{ include('CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig') }} */
/* {% endblock header %}*/
/* */
/* {% block titleTop %}<h2 class="title-heading">Brands</h2>{% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block brands %}*/
/* */
/*     {%for brand in brands %}*/
/*         <span border="1"> */
/*             <style>*/
/*                 .brands-img*/
/*                 {*/
/*                     margin: 50px 50px 50px 50px;*/
/* */
/*                 }*/
/*             </style>*/
/*             <a href="{{ path('condors_tn_mall_simple_brands_special' , {'id': brand.idEnseigne}) }}">*/
/*                 <img class="brands-img" width="200" heigth="200" src="{{ asset('uploads/pictures/')}}{{ brand.imageenseigne }}"/> &nbsp; &nbsp;&nbsp;*/
/*             </a>*/
/*         </span>*/
/*     {% endfor %}*/
/* */
/* {% endblock brands %}*/
/* */
/* */
/* */
