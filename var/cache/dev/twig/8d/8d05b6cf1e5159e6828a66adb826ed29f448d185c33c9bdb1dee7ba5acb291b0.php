<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_86661fdb8e33682085d68acdd11179a6ac0a6f1eefce1e9dcc5ceac1949304fb extends Twig_Template
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
        $__internal_d0db5cf6cdb71f8ee18bd507dd9149def399dfaab6e8b5cff27987d98df3a84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0db5cf6cdb71f8ee18bd507dd9149def399dfaab6e8b5cff27987d98df3a84f->enter($__internal_d0db5cf6cdb71f8ee18bd507dd9149def399dfaab6e8b5cff27987d98df3a84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d0db5cf6cdb71f8ee18bd507dd9149def399dfaab6e8b5cff27987d98df3a84f->leave($__internal_d0db5cf6cdb71f8ee18bd507dd9149def399dfaab6e8b5cff27987d98df3a84f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
