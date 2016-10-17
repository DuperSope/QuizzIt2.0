<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0c4c9d7247ca832362006be348940fd896bedc244cef31ac215a63a2ff4ed02c extends Twig_Template
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
        $__internal_d32377093524e03d7ad39e55fc882ec24bc70c11d12034828d43e36c6e7156ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32377093524e03d7ad39e55fc882ec24bc70c11d12034828d43e36c6e7156ec->enter($__internal_d32377093524e03d7ad39e55fc882ec24bc70c11d12034828d43e36c6e7156ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d32377093524e03d7ad39e55fc882ec24bc70c11d12034828d43e36c6e7156ec->leave($__internal_d32377093524e03d7ad39e55fc882ec24bc70c11d12034828d43e36c6e7156ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
