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
        $__internal_747b6bf09c0bf2bdc418f9e9caaff1630fe13b74c96c5ff97f3c07d9fcca6191 = $this->env->getExtension("native_profiler");
        $__internal_747b6bf09c0bf2bdc418f9e9caaff1630fe13b74c96c5ff97f3c07d9fcca6191->enter($__internal_747b6bf09c0bf2bdc418f9e9caaff1630fe13b74c96c5ff97f3c07d9fcca6191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_747b6bf09c0bf2bdc418f9e9caaff1630fe13b74c96c5ff97f3c07d9fcca6191->leave($__internal_747b6bf09c0bf2bdc418f9e9caaff1630fe13b74c96c5ff97f3c07d9fcca6191_prof);

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
