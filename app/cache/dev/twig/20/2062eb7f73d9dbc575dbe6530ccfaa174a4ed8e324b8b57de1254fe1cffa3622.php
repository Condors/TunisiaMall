<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_289abf7cd9e2c17d67d8e2c40fc971e8dc84b7ac51710182fb9c31e8cf2fba26 extends Twig_Template
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
        $__internal_f4e12fecdf8f88ccf5c884610a173d86ed57ad2f42dc2cd232b463f0a582ccac = $this->env->getExtension("native_profiler");
        $__internal_f4e12fecdf8f88ccf5c884610a173d86ed57ad2f42dc2cd232b463f0a582ccac->enter($__internal_f4e12fecdf8f88ccf5c884610a173d86ed57ad2f42dc2cd232b463f0a582ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f4e12fecdf8f88ccf5c884610a173d86ed57ad2f42dc2cd232b463f0a582ccac->leave($__internal_f4e12fecdf8f88ccf5c884610a173d86ed57ad2f42dc2cd232b463f0a582ccac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
