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
        $__internal_84411b07165d2519195c6277ac5f3283cd0a119a2bfc7af9e1a92efbfeada9a2 = $this->env->getExtension("native_profiler");
        $__internal_84411b07165d2519195c6277ac5f3283cd0a119a2bfc7af9e1a92efbfeada9a2->enter($__internal_84411b07165d2519195c6277ac5f3283cd0a119a2bfc7af9e1a92efbfeada9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_84411b07165d2519195c6277ac5f3283cd0a119a2bfc7af9e1a92efbfeada9a2->leave($__internal_84411b07165d2519195c6277ac5f3283cd0a119a2bfc7af9e1a92efbfeada9a2_prof);

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
