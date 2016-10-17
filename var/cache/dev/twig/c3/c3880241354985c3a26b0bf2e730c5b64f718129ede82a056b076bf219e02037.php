<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_435b85c1fa3db87364794c9181fd6c810d41ba57d517edc5f88cdf469b5dc042 extends Twig_Template
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
        $__internal_1b765dae2b9cc4a77b64713cc58bbcd6503b4b6129b46b4b741f8795b019f684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b765dae2b9cc4a77b64713cc58bbcd6503b4b6129b46b4b741f8795b019f684->enter($__internal_1b765dae2b9cc4a77b64713cc58bbcd6503b4b6129b46b4b741f8795b019f684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1b765dae2b9cc4a77b64713cc58bbcd6503b4b6129b46b4b741f8795b019f684->leave($__internal_1b765dae2b9cc4a77b64713cc58bbcd6503b4b6129b46b4b741f8795b019f684_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
