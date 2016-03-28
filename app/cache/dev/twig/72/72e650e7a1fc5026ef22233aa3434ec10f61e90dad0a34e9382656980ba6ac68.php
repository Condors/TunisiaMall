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
        $__internal_c2a757d370df6f9910a0527648040945352ba4d73eea40bc054245f1fb3435a8 = $this->env->getExtension("native_profiler");
        $__internal_c2a757d370df6f9910a0527648040945352ba4d73eea40bc054245f1fb3435a8->enter($__internal_c2a757d370df6f9910a0527648040945352ba4d73eea40bc054245f1fb3435a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor:brands.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2a757d370df6f9910a0527648040945352ba4d73eea40bc054245f1fb3435a8->leave($__internal_c2a757d370df6f9910a0527648040945352ba4d73eea40bc054245f1fb3435a8_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_e9dd5f198886e25f01cd242d9673ce868a538732205966b5a41e177f3a47c780 = $this->env->getExtension("native_profiler");
        $__internal_e9dd5f198886e25f01cd242d9673ce868a538732205966b5a41e177f3a47c780->enter($__internal_e9dd5f198886e25f01cd242d9673ce868a538732205966b5a41e177f3a47c780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 4
        echo "    <h1 class=\"page-title\"></h1>
";
        
        $__internal_e9dd5f198886e25f01cd242d9673ce868a538732205966b5a41e177f3a47c780->leave($__internal_e9dd5f198886e25f01cd242d9673ce868a538732205966b5a41e177f3a47c780_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_22b6d672bfb1128793c2cc834b7cd3b0fcfd5f091892644aebbe357a9b173425 = $this->env->getExtension("native_profiler");
        $__internal_22b6d672bfb1128793c2cc834b7cd3b0fcfd5f091892644aebbe357a9b173425->enter($__internal_22b6d672bfb1128793c2cc834b7cd3b0fcfd5f091892644aebbe357a9b173425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::SimpleVisitor/parts/header.html.twig");
        echo " 
";
        
        $__internal_22b6d672bfb1128793c2cc834b7cd3b0fcfd5f091892644aebbe357a9b173425->leave($__internal_22b6d672bfb1128793c2cc834b7cd3b0fcfd5f091892644aebbe357a9b173425_prof);

    }

    // line 11
    public function block_titleTop($context, array $blocks = array())
    {
        $__internal_8162833de2fb47013a78c03332516deb86cecd83677e25b0d9d3142b2be3deea = $this->env->getExtension("native_profiler");
        $__internal_8162833de2fb47013a78c03332516deb86cecd83677e25b0d9d3142b2be3deea->enter($__internal_8162833de2fb47013a78c03332516deb86cecd83677e25b0d9d3142b2be3deea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleTop"));

        echo "<h2 class=\"title-heading\">Brands</h2>";
        
        $__internal_8162833de2fb47013a78c03332516deb86cecd83677e25b0d9d3142b2be3deea->leave($__internal_8162833de2fb47013a78c03332516deb86cecd83677e25b0d9d3142b2be3deea_prof);

    }

    // line 17
    public function block_brands($context, array $blocks = array())
    {
        $__internal_aa4a34b7d742d16f9131f092b5bc8142491d10bfc40fdbd32b9cbe5546a5a537 = $this->env->getExtension("native_profiler");
        $__internal_aa4a34b7d742d16f9131f092b5bc8142491d10bfc40fdbd32b9cbe5546a5a537->enter($__internal_aa4a34b7d742d16f9131f092b5bc8142491d10bfc40fdbd32b9cbe5546a5a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brands"));

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
        
        $__internal_aa4a34b7d742d16f9131f092b5bc8142491d10bfc40fdbd32b9cbe5546a5a537->leave($__internal_aa4a34b7d742d16f9131f092b5bc8142491d10bfc40fdbd32b9cbe5546a5a537_prof);

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
