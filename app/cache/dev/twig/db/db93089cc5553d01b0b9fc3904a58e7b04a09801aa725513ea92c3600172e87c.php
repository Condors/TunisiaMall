<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_69075bbe6da9bb9a5860166be8f9bbf6ed19dc71c3bf08d06710b7b2ca017d3b extends Twig_Template
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
        $__internal_a01a1e1598ba53c13cc54f460f21abae30f3e6d39115f258809a2d184a7a1c44 = $this->env->getExtension("native_profiler");
        $__internal_a01a1e1598ba53c13cc54f460f21abae30f3e6d39115f258809a2d184a7a1c44->enter($__internal_a01a1e1598ba53c13cc54f460f21abae30f3e6d39115f258809a2d184a7a1c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a01a1e1598ba53c13cc54f460f21abae30f3e6d39115f258809a2d184a7a1c44->leave($__internal_a01a1e1598ba53c13cc54f460f21abae30f3e6d39115f258809a2d184a7a1c44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
