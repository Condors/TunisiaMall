<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5a26eca30289cd213c4195a5c4e85e33660d195cd4ed448995d7eb9402a21dff extends Twig_Template
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
        $__internal_a9d7d4b73d25ae3394c73ad7bcde4c80d6e75e7ce38330cc2d6d44ad4fc73cd9 = $this->env->getExtension("native_profiler");
        $__internal_a9d7d4b73d25ae3394c73ad7bcde4c80d6e75e7ce38330cc2d6d44ad4fc73cd9->enter($__internal_a9d7d4b73d25ae3394c73ad7bcde4c80d6e75e7ce38330cc2d6d44ad4fc73cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a9d7d4b73d25ae3394c73ad7bcde4c80d6e75e7ce38330cc2d6d44ad4fc73cd9->leave($__internal_a9d7d4b73d25ae3394c73ad7bcde4c80d6e75e7ce38330cc2d6d44ad4fc73cd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
