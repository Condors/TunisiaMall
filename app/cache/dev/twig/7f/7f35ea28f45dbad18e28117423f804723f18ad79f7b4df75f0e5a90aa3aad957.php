<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b295030c2ce10d00fb33917baf76367c3f3afc297000e2c878193ab536f5f57a extends Twig_Template
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
        $__internal_e0c549999d6f8d1a69911f86fe3a2f2aa5f1597174f3bba67310c944250787ce = $this->env->getExtension("native_profiler");
        $__internal_e0c549999d6f8d1a69911f86fe3a2f2aa5f1597174f3bba67310c944250787ce->enter($__internal_e0c549999d6f8d1a69911f86fe3a2f2aa5f1597174f3bba67310c944250787ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e0c549999d6f8d1a69911f86fe3a2f2aa5f1597174f3bba67310c944250787ce->leave($__internal_e0c549999d6f8d1a69911f86fe3a2f2aa5f1597174f3bba67310c944250787ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
