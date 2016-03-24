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
        $__internal_d72b07e4fdf0e065e72f06b2a1334c6ee9414b1580fc337924009a6b53fe8eae = $this->env->getExtension("native_profiler");
        $__internal_d72b07e4fdf0e065e72f06b2a1334c6ee9414b1580fc337924009a6b53fe8eae->enter($__internal_d72b07e4fdf0e065e72f06b2a1334c6ee9414b1580fc337924009a6b53fe8eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d72b07e4fdf0e065e72f06b2a1334c6ee9414b1580fc337924009a6b53fe8eae->leave($__internal_d72b07e4fdf0e065e72f06b2a1334c6ee9414b1580fc337924009a6b53fe8eae_prof);

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
