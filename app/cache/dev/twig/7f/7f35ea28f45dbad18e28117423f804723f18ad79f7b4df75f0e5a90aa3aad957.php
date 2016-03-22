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
        $__internal_5fb73eff76f5ac8173ae80f0c9fb9b698fde328f5a86b56f2bd558ff09769fdc = $this->env->getExtension("native_profiler");
        $__internal_5fb73eff76f5ac8173ae80f0c9fb9b698fde328f5a86b56f2bd558ff09769fdc->enter($__internal_5fb73eff76f5ac8173ae80f0c9fb9b698fde328f5a86b56f2bd558ff09769fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5fb73eff76f5ac8173ae80f0c9fb9b698fde328f5a86b56f2bd558ff09769fdc->leave($__internal_5fb73eff76f5ac8173ae80f0c9fb9b698fde328f5a86b56f2bd558ff09769fdc_prof);

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
