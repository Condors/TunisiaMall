<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_229fe715f46b46f43397fdd8bc5167323f619b3a926e3e90aa9d34c24cb623fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_005ec5ae4ce41f5735b1a24b977829ca44f2f12e8bef19612d18d996c4599764 = $this->env->getExtension("native_profiler");
        $__internal_005ec5ae4ce41f5735b1a24b977829ca44f2f12e8bef19612d18d996c4599764->enter($__internal_005ec5ae4ce41f5735b1a24b977829ca44f2f12e8bef19612d18d996c4599764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_005ec5ae4ce41f5735b1a24b977829ca44f2f12e8bef19612d18d996c4599764->leave($__internal_005ec5ae4ce41f5735b1a24b977829ca44f2f12e8bef19612d18d996c4599764_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
