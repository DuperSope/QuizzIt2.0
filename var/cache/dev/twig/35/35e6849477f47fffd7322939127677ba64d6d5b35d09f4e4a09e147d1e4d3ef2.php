<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3447a7977411986287260acab82ccd19708321f5ef08057f8b8a6987fa22a831 extends Twig_Template
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
        $__internal_50e1804dc31348e6456cc7533b2b18fc9b263d7d5c6bd5acdfdd48f8a9c3cfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e1804dc31348e6456cc7533b2b18fc9b263d7d5c6bd5acdfdd48f8a9c3cfd6->enter($__internal_50e1804dc31348e6456cc7533b2b18fc9b263d7d5c6bd5acdfdd48f8a9c3cfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_50e1804dc31348e6456cc7533b2b18fc9b263d7d5c6bd5acdfdd48f8a9c3cfd6->leave($__internal_50e1804dc31348e6456cc7533b2b18fc9b263d7d5c6bd5acdfdd48f8a9c3cfd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
    }
}
