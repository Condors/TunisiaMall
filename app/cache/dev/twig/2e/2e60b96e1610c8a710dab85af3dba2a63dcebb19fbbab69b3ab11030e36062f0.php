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
        $__internal_eb2ae5418e00c91e72e4ee68c2297d3e2ab61394518d0a6c3ad23ddb6e6449ad = $this->env->getExtension("native_profiler");
        $__internal_eb2ae5418e00c91e72e4ee68c2297d3e2ab61394518d0a6c3ad23ddb6e6449ad->enter($__internal_eb2ae5418e00c91e72e4ee68c2297d3e2ab61394518d0a6c3ad23ddb6e6449ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_eb2ae5418e00c91e72e4ee68c2297d3e2ab61394518d0a6c3ad23ddb6e6449ad->leave($__internal_eb2ae5418e00c91e72e4ee68c2297d3e2ab61394518d0a6c3ad23ddb6e6449ad_prof);

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
