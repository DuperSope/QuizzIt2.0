<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_473c87c503707fdccbf177d15118b50cfa49f9a92b2a34d82770b9c6c0ba732d extends Twig_Template
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
        $__internal_51fa7b397b75874765541452ba5d7b61c9ba7845a6976140566f90a68edadb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fa7b397b75874765541452ba5d7b61c9ba7845a6976140566f90a68edadb8d->enter($__internal_51fa7b397b75874765541452ba5d7b61c9ba7845a6976140566f90a68edadb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_51fa7b397b75874765541452ba5d7b61c9ba7845a6976140566f90a68edadb8d->leave($__internal_51fa7b397b75874765541452ba5d7b61c9ba7845a6976140566f90a68edadb8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
