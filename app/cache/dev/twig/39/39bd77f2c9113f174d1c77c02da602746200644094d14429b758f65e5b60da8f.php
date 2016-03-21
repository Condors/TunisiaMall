<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d5d68a8eb821cdf3f8f061646344106fdbe680362b8287ded3e7c9caa9df36d3 extends Twig_Template
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
        $__internal_396dca3dff11ecb0c19dfe643c3d97e516a35ed7b2011ba761ec0a0d1f6ef30a = $this->env->getExtension("native_profiler");
        $__internal_396dca3dff11ecb0c19dfe643c3d97e516a35ed7b2011ba761ec0a0d1f6ef30a->enter($__internal_396dca3dff11ecb0c19dfe643c3d97e516a35ed7b2011ba761ec0a0d1f6ef30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div class=\"loginMall\">
                

                ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 11
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 12
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 13
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 14
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                ";
        }
        // line 19
        echo "
                <div>
                    ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "                </div>
        </div>
    </body>
</html>
";
        
        $__internal_396dca3dff11ecb0c19dfe643c3d97e516a35ed7b2011ba761ec0a0d1f6ef30a->leave($__internal_396dca3dff11ecb0c19dfe643c3d97e516a35ed7b2011ba761ec0a0d1f6ef30a_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0790ddc80f672b6bb7a837460d61037a3a99bfb599d8bb24c3614f00db1189a0 = $this->env->getExtension("native_profiler");
        $__internal_0790ddc80f672b6bb7a837460d61037a3a99bfb599d8bb24c3614f00db1189a0->enter($__internal_0790ddc80f672b6bb7a837460d61037a3a99bfb599d8bb24c3614f00db1189a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "                    ";
        
        $__internal_0790ddc80f672b6bb7a837460d61037a3a99bfb599d8bb24c3614f00db1189a0->leave($__internal_0790ddc80f672b6bb7a837460d61037a3a99bfb599d8bb24c3614f00db1189a0_prof);

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
        return array (  92 => 22,  86 => 21,  75 => 23,  73 => 21,  69 => 19,  66 => 18,  60 => 17,  51 => 14,  46 => 13,  41 => 12,  36 => 11,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="loginMall">*/
/*                 */
/* */
/*                 {% if app.request.hasPreviousSession %}*/
/*                     {% for type, messages in app.session.flashbag.all() %}*/
/*                         {% for message in messages %}*/
/*                             <div class="flash-{{ type }}">*/
/*                                 {{ message }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/* */
/*                 <div>*/
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
