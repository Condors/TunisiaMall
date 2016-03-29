<?php

/* @CondorsTnMall/SimpleVisitor/brands.html.twig */
class __TwigTemplate_705646bd4f06ff2e7dacf9d46914a4d183fdcbc6de3356053d3c4024a3c72862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "@CondorsTnMall/SimpleVisitor/brands.html.twig", 1);
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
        $__internal_11813100f3e28035e0a8b71c1de38fdfcc66bad8a03dff83b0caa10615e2141d = $this->env->getExtension("native_profiler");
        $__internal_11813100f3e28035e0a8b71c1de38fdfcc66bad8a03dff83b0caa10615e2141d->enter($__internal_11813100f3e28035e0a8b71c1de38fdfcc66bad8a03dff83b0caa10615e2141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/SimpleVisitor/brands.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11813100f3e28035e0a8b71c1de38fdfcc66bad8a03dff83b0caa10615e2141d->leave($__internal_11813100f3e28035e0a8b71c1de38fdfcc66bad8a03dff83b0caa10615e2141d_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_3a358be12143c49fb6c261e52b51df78032ca23f36ce92872ae31c965bbfabb8 = $this->env->getExtension("native_profiler");
        $__internal_3a358be12143c49fb6c261e52b51df78032ca23f36ce92872ae31c965bbfabb8->enter($__internal_3a358be12143c49fb6c261e52b51df78032ca23f36ce92872ae31c965bbfabb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <h1 class=\"page-title\"></h1>
";
        
        $__internal_3a358be12143c49fb6c261e52b51df78032ca23f36ce92872ae31c965bbfabb8->leave($__internal_3a358be12143c49fb6c261e52b51df78032ca23f36ce92872ae31c965bbfabb8_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_742f7d152ea979177800201a8c32e8b46f3eb6f344b332912076dd2403d2f13c = $this->env->getExtension("native_profiler");
        $__internal_742f7d152ea979177800201a8c32e8b46f3eb6f344b332912076dd2403d2f13c->enter($__internal_742f7d152ea979177800201a8c32e8b46f3eb6f344b332912076dd2403d2f13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig");
        echo " 
";
        
        $__internal_742f7d152ea979177800201a8c32e8b46f3eb6f344b332912076dd2403d2f13c->leave($__internal_742f7d152ea979177800201a8c32e8b46f3eb6f344b332912076dd2403d2f13c_prof);

    }

    // line 11
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_5071a671834177c759b27b9bf85e447c045753de0d2f0cf1a3aeb1ffed3efb88 = $this->env->getExtension("native_profiler");
        $__internal_5071a671834177c759b27b9bf85e447c045753de0d2f0cf1a3aeb1ffed3efb88->enter($__internal_5071a671834177c759b27b9bf85e447c045753de0d2f0cf1a3aeb1ffed3efb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Brands</h2>";
        
        $__internal_5071a671834177c759b27b9bf85e447c045753de0d2f0cf1a3aeb1ffed3efb88->leave($__internal_5071a671834177c759b27b9bf85e447c045753de0d2f0cf1a3aeb1ffed3efb88_prof);

    }

    // line 17
    public function block_brands($context, array $blocks = array())
    {
        $__internal_e26882ad4b2b5aac89eb7df071ce7e2f02ec87eac7a1598505fb86898f145aaf = $this->env->getExtension("native_profiler");
        $__internal_e26882ad4b2b5aac89eb7df071ce7e2f02ec87eac7a1598505fb86898f145aaf->enter($__internal_e26882ad4b2b5aac89eb7df071ce7e2f02ec87eac7a1598505fb86898f145aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brands"));

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
        
        $__internal_e26882ad4b2b5aac89eb7df071ce7e2f02ec87eac7a1598505fb86898f145aaf->leave($__internal_e26882ad4b2b5aac89eb7df071ce7e2f02ec87eac7a1598505fb86898f145aaf_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/SimpleVisitor/brands.html.twig";
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
