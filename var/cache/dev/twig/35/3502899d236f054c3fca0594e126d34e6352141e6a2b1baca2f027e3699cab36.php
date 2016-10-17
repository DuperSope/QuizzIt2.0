<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ee0a12f0bf1d696c3cad879ab9413c0c9fd6b9175f5e1671647b13de5dfa318c extends Twig_Template
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
        $__internal_d7fc0caedd2ce8b0523900bdc8bc78d2bd993c9968f8dfa6f462f20b4e7d8d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fc0caedd2ce8b0523900bdc8bc78d2bd993c9968f8dfa6f462f20b4e7d8d3a->enter($__internal_d7fc0caedd2ce8b0523900bdc8bc78d2bd993c9968f8dfa6f462f20b4e7d8d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d7fc0caedd2ce8b0523900bdc8bc78d2bd993c9968f8dfa6f462f20b4e7d8d3a->leave($__internal_d7fc0caedd2ce8b0523900bdc8bc78d2bd993c9968f8dfa6f462f20b4e7d8d3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
