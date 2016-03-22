<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2ec37c785208616590790cbb19997b165792ee505d5f39f665cfe388b50251db extends Twig_Template
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
        $__internal_bbdf73718ba7957635e74237f8b57e24ad37e89ea9774cc186cb8eadae718ace = $this->env->getExtension("native_profiler");
        $__internal_bbdf73718ba7957635e74237f8b57e24ad37e89ea9774cc186cb8eadae718ace->enter($__internal_bbdf73718ba7957635e74237f8b57e24ad37e89ea9774cc186cb8eadae718ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bbdf73718ba7957635e74237f8b57e24ad37e89ea9774cc186cb8eadae718ace->leave($__internal_bbdf73718ba7957635e74237f8b57e24ad37e89ea9774cc186cb8eadae718ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->block($form, 'form_widget_simple', array('type' => isset($type) ? $type : 'hidden')) ?>*/
/* */
