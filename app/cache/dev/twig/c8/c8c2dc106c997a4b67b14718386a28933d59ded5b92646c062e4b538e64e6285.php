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
        $__internal_6fa8e4f420b1acec78f56a3fb0352272494b375a904cf7da5d652c17af246c93 = $this->env->getExtension("native_profiler");
        $__internal_6fa8e4f420b1acec78f56a3fb0352272494b375a904cf7da5d652c17af246c93->enter($__internal_6fa8e4f420b1acec78f56a3fb0352272494b375a904cf7da5d652c17af246c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6fa8e4f420b1acec78f56a3fb0352272494b375a904cf7da5d652c17af246c93->leave($__internal_6fa8e4f420b1acec78f56a3fb0352272494b375a904cf7da5d652c17af246c93_prof);

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
