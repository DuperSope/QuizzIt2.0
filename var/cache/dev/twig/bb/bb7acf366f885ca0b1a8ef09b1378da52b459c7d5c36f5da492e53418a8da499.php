<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b8c9ab5b91eeede4bf6fe859e6334c2ef5fccff2de4f344b92ed9f0b07b885d1 extends Twig_Template
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
        $__internal_f85d01f911d2ebc08b8f938d681b44ddb34850b966ad62e45f6d2c462b792637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85d01f911d2ebc08b8f938d681b44ddb34850b966ad62e45f6d2c462b792637->enter($__internal_f85d01f911d2ebc08b8f938d681b44ddb34850b966ad62e45f6d2c462b792637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f85d01f911d2ebc08b8f938d681b44ddb34850b966ad62e45f6d2c462b792637->leave($__internal_f85d01f911d2ebc08b8f938d681b44ddb34850b966ad62e45f6d2c462b792637_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
