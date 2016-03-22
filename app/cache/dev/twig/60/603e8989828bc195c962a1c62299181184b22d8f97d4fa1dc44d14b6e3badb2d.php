<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4f978111b0b20f168f9de23052868b624e9bf052d9836b86497f495557a4cd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_746e93100acfdd09c4ba920785195482197f7a27768403417352c45092ea9e45 = $this->env->getExtension("native_profiler");
        $__internal_746e93100acfdd09c4ba920785195482197f7a27768403417352c45092ea9e45->enter($__internal_746e93100acfdd09c4ba920785195482197f7a27768403417352c45092ea9e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_746e93100acfdd09c4ba920785195482197f7a27768403417352c45092ea9e45->leave($__internal_746e93100acfdd09c4ba920785195482197f7a27768403417352c45092ea9e45_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3d9b301eb20abfcb1be44d90680108ce446c7b3c599d27de98862e23a03ea050 = $this->env->getExtension("native_profiler");
        $__internal_3d9b301eb20abfcb1be44d90680108ce446c7b3c599d27de98862e23a03ea050->enter($__internal_3d9b301eb20abfcb1be44d90680108ce446c7b3c599d27de98862e23a03ea050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3d9b301eb20abfcb1be44d90680108ce446c7b3c599d27de98862e23a03ea050->leave($__internal_3d9b301eb20abfcb1be44d90680108ce446c7b3c599d27de98862e23a03ea050_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6c886fb7a77b0205a9a6b539a76d5bddc1197f25afee0e2c99e68a36f649b21d = $this->env->getExtension("native_profiler");
        $__internal_6c886fb7a77b0205a9a6b539a76d5bddc1197f25afee0e2c99e68a36f649b21d->enter($__internal_6c886fb7a77b0205a9a6b539a76d5bddc1197f25afee0e2c99e68a36f649b21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6c886fb7a77b0205a9a6b539a76d5bddc1197f25afee0e2c99e68a36f649b21d->leave($__internal_6c886fb7a77b0205a9a6b539a76d5bddc1197f25afee0e2c99e68a36f649b21d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a53687e66608612ad0f70039bc7bf54ddcf3f2c504ef845102151a8c7a1f2742 = $this->env->getExtension("native_profiler");
        $__internal_a53687e66608612ad0f70039bc7bf54ddcf3f2c504ef845102151a8c7a1f2742->enter($__internal_a53687e66608612ad0f70039bc7bf54ddcf3f2c504ef845102151a8c7a1f2742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a53687e66608612ad0f70039bc7bf54ddcf3f2c504ef845102151a8c7a1f2742->leave($__internal_a53687e66608612ad0f70039bc7bf54ddcf3f2c504ef845102151a8c7a1f2742_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
