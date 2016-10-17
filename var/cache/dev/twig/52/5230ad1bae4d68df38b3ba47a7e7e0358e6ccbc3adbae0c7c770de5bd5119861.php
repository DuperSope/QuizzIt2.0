<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6064d652a38a86b8064a5c8c90acb466cb441656b1f29bacccedebd9556d75b2 extends Twig_Template
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
        $__internal_89df637ffd41477888f52f7bb4e70cfe72f89392d568a4ba916d37d135d76030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89df637ffd41477888f52f7bb4e70cfe72f89392d568a4ba916d37d135d76030->enter($__internal_89df637ffd41477888f52f7bb4e70cfe72f89392d568a4ba916d37d135d76030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_89df637ffd41477888f52f7bb4e70cfe72f89392d568a4ba916d37d135d76030->leave($__internal_89df637ffd41477888f52f7bb4e70cfe72f89392d568a4ba916d37d135d76030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
