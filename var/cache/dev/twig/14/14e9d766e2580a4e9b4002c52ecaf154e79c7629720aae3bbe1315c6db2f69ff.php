<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c2ead39b98a19b3c69f40c1dcba01ee8024bb8c9cd4a5e4bb2abe2261020969b extends Twig_Template
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
        $__internal_c4fe20414c884dbb29b320b98f7ce0377fcb982134aa5b3116bb435bec662a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fe20414c884dbb29b320b98f7ce0377fcb982134aa5b3116bb435bec662a82->enter($__internal_c4fe20414c884dbb29b320b98f7ce0377fcb982134aa5b3116bb435bec662a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c4fe20414c884dbb29b320b98f7ce0377fcb982134aa5b3116bb435bec662a82->leave($__internal_c4fe20414c884dbb29b320b98f7ce0377fcb982134aa5b3116bb435bec662a82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
