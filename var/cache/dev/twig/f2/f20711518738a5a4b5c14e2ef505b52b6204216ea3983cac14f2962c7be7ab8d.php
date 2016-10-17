<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d400513631f07bbd4dbe416c184de75fe61ec328dd1bd5e594869a9a7c0dbbd3 extends Twig_Template
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
        $__internal_2e67e2b95189cf34c488538d6daddb1651679a8a750035898e405a31ecff4a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e67e2b95189cf34c488538d6daddb1651679a8a750035898e405a31ecff4a26->enter($__internal_2e67e2b95189cf34c488538d6daddb1651679a8a750035898e405a31ecff4a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2e67e2b95189cf34c488538d6daddb1651679a8a750035898e405a31ecff4a26->leave($__internal_2e67e2b95189cf34c488538d6daddb1651679a8a750035898e405a31ecff4a26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
