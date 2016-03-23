<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0737f63ce3fc070e255b923bb20b7aff113f46d497157e3ff23847909bbe78bf extends Twig_Template
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
        $__internal_a3073a4cf8c70409ded2a211d53eaa7de64f4c01a7b0e167055ae957ab3db8ee = $this->env->getExtension("native_profiler");
        $__internal_a3073a4cf8c70409ded2a211d53eaa7de64f4c01a7b0e167055ae957ab3db8ee->enter($__internal_a3073a4cf8c70409ded2a211d53eaa7de64f4c01a7b0e167055ae957ab3db8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a3073a4cf8c70409ded2a211d53eaa7de64f4c01a7b0e167055ae957ab3db8ee->leave($__internal_a3073a4cf8c70409ded2a211d53eaa7de64f4c01a7b0e167055ae957ab3db8ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
