<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e7a361fcb7c1e983744b8272013687f7ec8e20210b3698f5135a5ecafed09d67 extends Twig_Template
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
        $__internal_c9800ed06a61e86968fd2323549390e44d184ec5dc21a2836cb76ea2bd869068 = $this->env->getExtension("native_profiler");
        $__internal_c9800ed06a61e86968fd2323549390e44d184ec5dc21a2836cb76ea2bd869068->enter($__internal_c9800ed06a61e86968fd2323549390e44d184ec5dc21a2836cb76ea2bd869068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c9800ed06a61e86968fd2323549390e44d184ec5dc21a2836cb76ea2bd869068->leave($__internal_c9800ed06a61e86968fd2323549390e44d184ec5dc21a2836cb76ea2bd869068_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */