<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_302ec87a7c35210c98cb34d23fef748bd265e68b005019f582ce50ec44a71226 extends Twig_Template
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
        $__internal_f9cad35ec12930c21c6b3e94ef561f2b1df1bac96c9228a1b607f9fa456dd855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cad35ec12930c21c6b3e94ef561f2b1df1bac96c9228a1b607f9fa456dd855->enter($__internal_f9cad35ec12930c21c6b3e94ef561f2b1df1bac96c9228a1b607f9fa456dd855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f9cad35ec12930c21c6b3e94ef561f2b1df1bac96c9228a1b607f9fa456dd855->leave($__internal_f9cad35ec12930c21c6b3e94ef561f2b1df1bac96c9228a1b607f9fa456dd855_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
