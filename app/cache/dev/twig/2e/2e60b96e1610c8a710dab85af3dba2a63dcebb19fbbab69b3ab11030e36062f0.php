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
        $__internal_0a0627a7bbac9bdbdf81d82acab063061a2216e414ae5ff12804ca036b58cf7a = $this->env->getExtension("native_profiler");
        $__internal_0a0627a7bbac9bdbdf81d82acab063061a2216e414ae5ff12804ca036b58cf7a->enter($__internal_0a0627a7bbac9bdbdf81d82acab063061a2216e414ae5ff12804ca036b58cf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0a0627a7bbac9bdbdf81d82acab063061a2216e414ae5ff12804ca036b58cf7a->leave($__internal_0a0627a7bbac9bdbdf81d82acab063061a2216e414ae5ff12804ca036b58cf7a_prof);

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
