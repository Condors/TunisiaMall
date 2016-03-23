<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_66d8af3e2877b34d5945d5daaa969ee104c6a636f2bc7cae6f551690249c8274 extends Twig_Template
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
        $__internal_e0186887699d34c3b39a0aefa120ec94c07b197f08efced9bec0c04118903517 = $this->env->getExtension("native_profiler");
        $__internal_e0186887699d34c3b39a0aefa120ec94c07b197f08efced9bec0c04118903517->enter($__internal_e0186887699d34c3b39a0aefa120ec94c07b197f08efced9bec0c04118903517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e0186887699d34c3b39a0aefa120ec94c07b197f08efced9bec0c04118903517->leave($__internal_e0186887699d34c3b39a0aefa120ec94c07b197f08efced9bec0c04118903517_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
