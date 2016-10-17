<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_edb9f0120caaa6a435a8e2f1241974e164e15bf416ec956716d361518fd5409a extends Twig_Template
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
        $__internal_c453e0bba019d0164ceb4f6c0d04bc9a04f1b4f5c570cdaab34c887c28c83a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c453e0bba019d0164ceb4f6c0d04bc9a04f1b4f5c570cdaab34c887c28c83a42->enter($__internal_c453e0bba019d0164ceb4f6c0d04bc9a04f1b4f5c570cdaab34c887c28c83a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c453e0bba019d0164ceb4f6c0d04bc9a04f1b4f5c570cdaab34c887c28c83a42->leave($__internal_c453e0bba019d0164ceb4f6c0d04bc9a04f1b4f5c570cdaab34c887c28c83a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
