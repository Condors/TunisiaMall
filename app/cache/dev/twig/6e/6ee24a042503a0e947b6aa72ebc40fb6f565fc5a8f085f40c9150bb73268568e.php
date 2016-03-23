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
        $__internal_5d083b2dc7ab21534368add5bde52a4cb5aebf876c4d46e6f9e19fe8dd0fe416 = $this->env->getExtension("native_profiler");
        $__internal_5d083b2dc7ab21534368add5bde52a4cb5aebf876c4d46e6f9e19fe8dd0fe416->enter($__internal_5d083b2dc7ab21534368add5bde52a4cb5aebf876c4d46e6f9e19fe8dd0fe416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5d083b2dc7ab21534368add5bde52a4cb5aebf876c4d46e6f9e19fe8dd0fe416->leave($__internal_5d083b2dc7ab21534368add5bde52a4cb5aebf876c4d46e6f9e19fe8dd0fe416_prof);

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
