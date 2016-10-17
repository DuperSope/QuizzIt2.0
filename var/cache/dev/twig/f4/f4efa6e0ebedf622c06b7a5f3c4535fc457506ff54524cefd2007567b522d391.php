<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8ed5bdc68fa7f68f9749f63fdb2db0dfce22b061b8ce69103d243311370237d2 extends Twig_Template
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
        $__internal_ce3d55c58b573f307a9bb9cd85ac747aefde37b66c57650b26f44d28d9ce5a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3d55c58b573f307a9bb9cd85ac747aefde37b66c57650b26f44d28d9ce5a14->enter($__internal_ce3d55c58b573f307a9bb9cd85ac747aefde37b66c57650b26f44d28d9ce5a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ce3d55c58b573f307a9bb9cd85ac747aefde37b66c57650b26f44d28d9ce5a14->leave($__internal_ce3d55c58b573f307a9bb9cd85ac747aefde37b66c57650b26f44d28d9ce5a14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
