<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b037f3ccc401c7633e7ee79ea2287da583c5b25393dcaafee66beff1cdb63d4d extends Twig_Template
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
        $__internal_82f038d9d8d86ed3847c9fdf462254b03b880c36b19848e51234a064dc06aafd = $this->env->getExtension("native_profiler");
        $__internal_82f038d9d8d86ed3847c9fdf462254b03b880c36b19848e51234a064dc06aafd->enter($__internal_82f038d9d8d86ed3847c9fdf462254b03b880c36b19848e51234a064dc06aafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_82f038d9d8d86ed3847c9fdf462254b03b880c36b19848e51234a064dc06aafd->leave($__internal_82f038d9d8d86ed3847c9fdf462254b03b880c36b19848e51234a064dc06aafd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
