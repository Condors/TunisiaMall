<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_76b17f6d4d0d87e99c06a4b243c8a79b1270913a8d3a53602c5725b34a5e1b6c extends Twig_Template
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
        $__internal_231b3a1e090bdba30f4e2ef1e74841c92efa641efaab1bdc315165c771717249 = $this->env->getExtension("native_profiler");
        $__internal_231b3a1e090bdba30f4e2ef1e74841c92efa641efaab1bdc315165c771717249->enter($__internal_231b3a1e090bdba30f4e2ef1e74841c92efa641efaab1bdc315165c771717249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_231b3a1e090bdba30f4e2ef1e74841c92efa641efaab1bdc315165c771717249->leave($__internal_231b3a1e090bdba30f4e2ef1e74841c92efa641efaab1bdc315165c771717249_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
