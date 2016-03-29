<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_30a65c6186a3d724cac6de62255303a668719dd915cdc9e8a48cdffc0dfef9eb extends Twig_Template
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
        $__internal_60a99b9fff60f4d688886838af2895b8b59b42ed12b7094b857517113122a671 = $this->env->getExtension("native_profiler");
        $__internal_60a99b9fff60f4d688886838af2895b8b59b42ed12b7094b857517113122a671->enter($__internal_60a99b9fff60f4d688886838af2895b8b59b42ed12b7094b857517113122a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_60a99b9fff60f4d688886838af2895b8b59b42ed12b7094b857517113122a671->leave($__internal_60a99b9fff60f4d688886838af2895b8b59b42ed12b7094b857517113122a671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
