<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_51cb312d556da8b9fe230a97536fe53a82b10ce538a10a736fcea35ae0ae3dd7 extends Twig_Template
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
        $__internal_c251fdeea08ef8d15b74d6b33f7e4ea72a8a05d7958e9b464c6bc9b6ee5e180b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c251fdeea08ef8d15b74d6b33f7e4ea72a8a05d7958e9b464c6bc9b6ee5e180b->enter($__internal_c251fdeea08ef8d15b74d6b33f7e4ea72a8a05d7958e9b464c6bc9b6ee5e180b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c251fdeea08ef8d15b74d6b33f7e4ea72a8a05d7958e9b464c6bc9b6ee5e180b->leave($__internal_c251fdeea08ef8d15b74d6b33f7e4ea72a8a05d7958e9b464c6bc9b6ee5e180b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
