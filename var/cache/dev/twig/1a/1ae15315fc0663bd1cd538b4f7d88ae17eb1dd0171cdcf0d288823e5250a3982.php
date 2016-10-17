<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4605a260558bdafdbc170ebe2c2b36e33650b1569f46ea095fd839219f881f77 extends Twig_Template
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
        $__internal_1ff58d4f885fe596a3b42355c53d45b3d92a28e3abf5b427190ada3406e6a036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff58d4f885fe596a3b42355c53d45b3d92a28e3abf5b427190ada3406e6a036->enter($__internal_1ff58d4f885fe596a3b42355c53d45b3d92a28e3abf5b427190ada3406e6a036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1ff58d4f885fe596a3b42355c53d45b3d92a28e3abf5b427190ada3406e6a036->leave($__internal_1ff58d4f885fe596a3b42355c53d45b3d92a28e3abf5b427190ada3406e6a036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
