<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6cf1e1fee43f66db1c00ac46dbbd4bd7a88c3a77c026842d3297f24c8c076e43 extends Twig_Template
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
        $__internal_c8082a7aa756daaaf3748361f76980da5e1f7ffd93e68fe9ed8eb04494db4a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8082a7aa756daaaf3748361f76980da5e1f7ffd93e68fe9ed8eb04494db4a4b->enter($__internal_c8082a7aa756daaaf3748361f76980da5e1f7ffd93e68fe9ed8eb04494db4a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c8082a7aa756daaaf3748361f76980da5e1f7ffd93e68fe9ed8eb04494db4a4b->leave($__internal_c8082a7aa756daaaf3748361f76980da5e1f7ffd93e68fe9ed8eb04494db4a4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
