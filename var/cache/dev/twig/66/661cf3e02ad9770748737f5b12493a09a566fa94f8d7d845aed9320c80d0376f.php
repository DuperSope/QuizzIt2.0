<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_92121a5888a5d5a699e8de7897a109ae5296bd1276ab3eaeb5f55cbd3684404e extends Twig_Template
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
        $__internal_9e66a1c50b5fb2bedecad992015ea2a6777c6a81e15dc2d70fb3eba7f19e0fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e66a1c50b5fb2bedecad992015ea2a6777c6a81e15dc2d70fb3eba7f19e0fdd->enter($__internal_9e66a1c50b5fb2bedecad992015ea2a6777c6a81e15dc2d70fb3eba7f19e0fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9e66a1c50b5fb2bedecad992015ea2a6777c6a81e15dc2d70fb3eba7f19e0fdd->leave($__internal_9e66a1c50b5fb2bedecad992015ea2a6777c6a81e15dc2d70fb3eba7f19e0fdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
