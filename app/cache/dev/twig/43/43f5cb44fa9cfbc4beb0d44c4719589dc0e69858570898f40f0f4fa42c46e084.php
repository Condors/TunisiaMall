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
        $__internal_0aa161814caff2ecdc2be4599311e4c3795d6ad724d62768fe5775e678bd4e4c = $this->env->getExtension("native_profiler");
        $__internal_0aa161814caff2ecdc2be4599311e4c3795d6ad724d62768fe5775e678bd4e4c->enter($__internal_0aa161814caff2ecdc2be4599311e4c3795d6ad724d62768fe5775e678bd4e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0aa161814caff2ecdc2be4599311e4c3795d6ad724d62768fe5775e678bd4e4c->leave($__internal_0aa161814caff2ecdc2be4599311e4c3795d6ad724d62768fe5775e678bd4e4c_prof);

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
