<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c9a428674b75153a94247c75cb378ff532f6ef17b9ae4882296c1b83cf55cbf0 extends Twig_Template
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
        $__internal_375ff2db2ac3cb54974f58fb65e6a5bd61cd3838f100437e73dd8d5296453db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375ff2db2ac3cb54974f58fb65e6a5bd61cd3838f100437e73dd8d5296453db4->enter($__internal_375ff2db2ac3cb54974f58fb65e6a5bd61cd3838f100437e73dd8d5296453db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_375ff2db2ac3cb54974f58fb65e6a5bd61cd3838f100437e73dd8d5296453db4->leave($__internal_375ff2db2ac3cb54974f58fb65e6a5bd61cd3838f100437e73dd8d5296453db4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
