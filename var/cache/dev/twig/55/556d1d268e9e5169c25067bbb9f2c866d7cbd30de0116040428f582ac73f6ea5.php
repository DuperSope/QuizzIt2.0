<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_31f152edc8c5d6d7dd6cd379191eb6b230ff2d5217717a5008d2ae7e502ec3a1 extends Twig_Template
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
        $__internal_6ae3feba8c2024821ab61fae9920fc7bf2c32408f893eb3126b4349702f0aaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae3feba8c2024821ab61fae9920fc7bf2c32408f893eb3126b4349702f0aaf4->enter($__internal_6ae3feba8c2024821ab61fae9920fc7bf2c32408f893eb3126b4349702f0aaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_6ae3feba8c2024821ab61fae9920fc7bf2c32408f893eb3126b4349702f0aaf4->leave($__internal_6ae3feba8c2024821ab61fae9920fc7bf2c32408f893eb3126b4349702f0aaf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
    }
}
