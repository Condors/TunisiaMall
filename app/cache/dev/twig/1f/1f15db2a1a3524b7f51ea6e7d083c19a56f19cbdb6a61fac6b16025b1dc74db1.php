<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a863d3594fb08dd93e03e45725c5176529d5859de34e0e091f01ce1d045c3c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66bd46a8f9d962abb8ab0bef5c9b2eac58818aa035d05d4c0bc9ff235d2a7c70 = $this->env->getExtension("native_profiler");
        $__internal_66bd46a8f9d962abb8ab0bef5c9b2eac58818aa035d05d4c0bc9ff235d2a7c70->enter($__internal_66bd46a8f9d962abb8ab0bef5c9b2eac58818aa035d05d4c0bc9ff235d2a7c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        

        ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 11
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 12
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 13
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
        }
        // line 18
        echo "
        <div>
            ";
        // line 20
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>
";
        
        $__internal_66bd46a8f9d962abb8ab0bef5c9b2eac58818aa035d05d4c0bc9ff235d2a7c70->leave($__internal_66bd46a8f9d962abb8ab0bef5c9b2eac58818aa035d05d4c0bc9ff235d2a7c70_prof);

    }

    // line 20
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbb0fb3e897dadf3a118c7f85a26d96b823065f758c90c786dbd388fc083f9a1 = $this->env->getExtension("native_profiler");
        $__internal_bbb0fb3e897dadf3a118c7f85a26d96b823065f758c90c786dbd388fc083f9a1->enter($__internal_bbb0fb3e897dadf3a118c7f85a26d96b823065f758c90c786dbd388fc083f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 21
        echo "            ";
        
        $__internal_bbb0fb3e897dadf3a118c7f85a26d96b823065f758c90c786dbd388fc083f9a1->leave($__internal_bbb0fb3e897dadf3a118c7f85a26d96b823065f758c90c786dbd388fc083f9a1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  84 => 20,  74 => 22,  72 => 20,  68 => 18,  65 => 17,  59 => 16,  50 => 13,  45 => 12,  40 => 11,  35 => 10,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         */
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
