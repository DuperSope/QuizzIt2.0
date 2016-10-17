<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e417dadf462371cb7ae6384fd4e35aaba79517d8d0bfa32dfc4f7755703a8db2 extends Twig_Template
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
        $__internal_29946827ee8547340cbd45ed9cd0a96a24e09671fa349f390f84b35a6b8c7090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29946827ee8547340cbd45ed9cd0a96a24e09671fa349f390f84b35a6b8c7090->enter($__internal_29946827ee8547340cbd45ed9cd0a96a24e09671fa349f390f84b35a6b8c7090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_29946827ee8547340cbd45ed9cd0a96a24e09671fa349f390f84b35a6b8c7090->leave($__internal_29946827ee8547340cbd45ed9cd0a96a24e09671fa349f390f84b35a6b8c7090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
