<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_797a088c8e853330f381279563bd2cfb65231fdd984f9761f3ce86b46da2baaa extends Twig_Template
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
        $__internal_2a3796880fe1b52d725ca543a2ee8a7e119fc0dc474afd26826908319b946534 = $this->env->getExtension("native_profiler");
        $__internal_2a3796880fe1b52d725ca543a2ee8a7e119fc0dc474afd26826908319b946534->enter($__internal_2a3796880fe1b52d725ca543a2ee8a7e119fc0dc474afd26826908319b946534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2a3796880fe1b52d725ca543a2ee8a7e119fc0dc474afd26826908319b946534->leave($__internal_2a3796880fe1b52d725ca543a2ee8a7e119fc0dc474afd26826908319b946534_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
