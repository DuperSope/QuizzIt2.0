<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_42cf611b9bbf2a002d10be380637530bfe80d9f2f6d14cee3e18f1db0864b8f3 extends Twig_Template
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
        $__internal_dc349edb15945ca5172fc282c735335f9a527c4a71f53810aede7015ca25571f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc349edb15945ca5172fc282c735335f9a527c4a71f53810aede7015ca25571f->enter($__internal_dc349edb15945ca5172fc282c735335f9a527c4a71f53810aede7015ca25571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dc349edb15945ca5172fc282c735335f9a527c4a71f53810aede7015ca25571f->leave($__internal_dc349edb15945ca5172fc282c735335f9a527c4a71f53810aede7015ca25571f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
