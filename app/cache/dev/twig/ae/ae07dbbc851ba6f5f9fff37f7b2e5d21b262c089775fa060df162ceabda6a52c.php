<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b09e2c28830f258ebf2bdb0c4ce93e37abc042a7140da87914372b5c97f4545f extends Twig_Template
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
        $__internal_111bdd4a92a1f6a445fc885f01d632e996b68a860339ede66347942af2e1bf02 = $this->env->getExtension("native_profiler");
        $__internal_111bdd4a92a1f6a445fc885f01d632e996b68a860339ede66347942af2e1bf02->enter($__internal_111bdd4a92a1f6a445fc885f01d632e996b68a860339ede66347942af2e1bf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_111bdd4a92a1f6a445fc885f01d632e996b68a860339ede66347942af2e1bf02->leave($__internal_111bdd4a92a1f6a445fc885f01d632e996b68a860339ede66347942af2e1bf02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
