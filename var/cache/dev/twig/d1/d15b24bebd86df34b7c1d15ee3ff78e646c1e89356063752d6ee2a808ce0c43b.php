<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_27f151b4b1c05ce7ea8bccc3e31ba447c42073f1b86a6c45028c4613f22ed5b5 extends Twig_Template
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
        $__internal_a55f86ef216416522db09d75d74f8047dbd4cd8f30e8a0c767894047f72275d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55f86ef216416522db09d75d74f8047dbd4cd8f30e8a0c767894047f72275d2->enter($__internal_a55f86ef216416522db09d75d74f8047dbd4cd8f30e8a0c767894047f72275d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a55f86ef216416522db09d75d74f8047dbd4cd8f30e8a0c767894047f72275d2->leave($__internal_a55f86ef216416522db09d75d74f8047dbd4cd8f30e8a0c767894047f72275d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
