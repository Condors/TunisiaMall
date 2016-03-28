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
        $__internal_5d49a3423cb9c9d87de6c060b6c56d4bc22029d4d9151e694ff0dc761a3aab93 = $this->env->getExtension("native_profiler");
        $__internal_5d49a3423cb9c9d87de6c060b6c56d4bc22029d4d9151e694ff0dc761a3aab93->enter($__internal_5d49a3423cb9c9d87de6c060b6c56d4bc22029d4d9151e694ff0dc761a3aab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5d49a3423cb9c9d87de6c060b6c56d4bc22029d4d9151e694ff0dc761a3aab93->leave($__internal_5d49a3423cb9c9d87de6c060b6c56d4bc22029d4d9151e694ff0dc761a3aab93_prof);

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
