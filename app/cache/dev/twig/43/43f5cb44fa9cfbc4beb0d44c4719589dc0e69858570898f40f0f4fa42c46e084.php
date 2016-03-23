<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c1e393e00d8c49d9e21718798688083f8b788a748fadccece95793de81917828 extends Twig_Template
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
        $__internal_1faf2800af41cd0b0c31bb85c6c004aae350390842530c815d14bf73f53ff5c9 = $this->env->getExtension("native_profiler");
        $__internal_1faf2800af41cd0b0c31bb85c6c004aae350390842530c815d14bf73f53ff5c9->enter($__internal_1faf2800af41cd0b0c31bb85c6c004aae350390842530c815d14bf73f53ff5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1faf2800af41cd0b0c31bb85c6c004aae350390842530c815d14bf73f53ff5c9->leave($__internal_1faf2800af41cd0b0c31bb85c6c004aae350390842530c815d14bf73f53ff5c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
