<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f5aff305e49220d579b72eac6914641f5d520feaca3edcff38549990d77bc7ad extends Twig_Template
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
        $__internal_8a98731e64a1540cdfb597440ea35d9a0269e80d2b11ac0bfd8e95f52018bf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a98731e64a1540cdfb597440ea35d9a0269e80d2b11ac0bfd8e95f52018bf8b->enter($__internal_8a98731e64a1540cdfb597440ea35d9a0269e80d2b11ac0bfd8e95f52018bf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8a98731e64a1540cdfb597440ea35d9a0269e80d2b11ac0bfd8e95f52018bf8b->leave($__internal_8a98731e64a1540cdfb597440ea35d9a0269e80d2b11ac0bfd8e95f52018bf8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->widget(\$form) ?>
";
    }
}
