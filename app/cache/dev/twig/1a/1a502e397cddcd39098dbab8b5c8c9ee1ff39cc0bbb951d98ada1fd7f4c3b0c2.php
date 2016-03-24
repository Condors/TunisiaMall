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
        $__internal_569572eb00e36ed3a91a5b1cf7327c76e36e77b941110317fb49ac8d0a8ebe05 = $this->env->getExtension("native_profiler");
        $__internal_569572eb00e36ed3a91a5b1cf7327c76e36e77b941110317fb49ac8d0a8ebe05->enter($__internal_569572eb00e36ed3a91a5b1cf7327c76e36e77b941110317fb49ac8d0a8ebe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_569572eb00e36ed3a91a5b1cf7327c76e36e77b941110317fb49ac8d0a8ebe05->leave($__internal_569572eb00e36ed3a91a5b1cf7327c76e36e77b941110317fb49ac8d0a8ebe05_prof);

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
