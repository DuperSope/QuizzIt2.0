<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5b4c6146f164b260dc4c23a367626f4107792ebee423ce68d039adc381fb7e6a extends Twig_Template
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
        $__internal_86269782cd0a049c2d183d0fe51f4e9b3b176fad45c53bf80f07b664eee51585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86269782cd0a049c2d183d0fe51f4e9b3b176fad45c53bf80f07b664eee51585->enter($__internal_86269782cd0a049c2d183d0fe51f4e9b3b176fad45c53bf80f07b664eee51585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_86269782cd0a049c2d183d0fe51f4e9b3b176fad45c53bf80f07b664eee51585->leave($__internal_86269782cd0a049c2d183d0fe51f4e9b3b176fad45c53bf80f07b664eee51585_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
