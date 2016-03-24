<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_303385ee83bc7aa590f10d58469de806b7df547debcf8137d2f689b82799ef70 extends Twig_Template
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
        $__internal_db6715eff611bc18745a0d72f310aa0c3ff06df7b75e928e81acace69d850d7b = $this->env->getExtension("native_profiler");
        $__internal_db6715eff611bc18745a0d72f310aa0c3ff06df7b75e928e81acace69d850d7b->enter($__internal_db6715eff611bc18745a0d72f310aa0c3ff06df7b75e928e81acace69d850d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_db6715eff611bc18745a0d72f310aa0c3ff06df7b75e928e81acace69d850d7b->leave($__internal_db6715eff611bc18745a0d72f310aa0c3ff06df7b75e928e81acace69d850d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
