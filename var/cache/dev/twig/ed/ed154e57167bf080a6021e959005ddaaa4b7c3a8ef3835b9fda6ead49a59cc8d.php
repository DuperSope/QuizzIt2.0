<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_921f6526d8c9f3a169a8e544373a45b7c2eb6750fa338d495e1484f0c75970c7 extends Twig_Template
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
        $__internal_f76394bc960140d8cefd0de8aeebd82dfe9a997b7b518986ebb624d957c53151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76394bc960140d8cefd0de8aeebd82dfe9a997b7b518986ebb624d957c53151->enter($__internal_f76394bc960140d8cefd0de8aeebd82dfe9a997b7b518986ebb624d957c53151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f76394bc960140d8cefd0de8aeebd82dfe9a997b7b518986ebb624d957c53151->leave($__internal_f76394bc960140d8cefd0de8aeebd82dfe9a997b7b518986ebb624d957c53151_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
