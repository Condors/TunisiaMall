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
        $__internal_d49a8502ffb081e132ae36b599bdf13eb93842d4c5f5528cf50d9a84ef19e967 = $this->env->getExtension("native_profiler");
        $__internal_d49a8502ffb081e132ae36b599bdf13eb93842d4c5f5528cf50d9a84ef19e967->enter($__internal_d49a8502ffb081e132ae36b599bdf13eb93842d4c5f5528cf50d9a84ef19e967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d49a8502ffb081e132ae36b599bdf13eb93842d4c5f5528cf50d9a84ef19e967->leave($__internal_d49a8502ffb081e132ae36b599bdf13eb93842d4c5f5528cf50d9a84ef19e967_prof);

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
