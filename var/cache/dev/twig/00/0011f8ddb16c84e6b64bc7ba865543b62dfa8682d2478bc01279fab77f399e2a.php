<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2054c44d8711caaaa1a60d858bf32710f61196eabde703c0a989af72ad37c1e8 extends Twig_Template
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
        $__internal_96dc439bccf54dc55a95a6316951f37ed75fed4902e23030edb62fa74bb2464c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96dc439bccf54dc55a95a6316951f37ed75fed4902e23030edb62fa74bb2464c->enter($__internal_96dc439bccf54dc55a95a6316951f37ed75fed4902e23030edb62fa74bb2464c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_96dc439bccf54dc55a95a6316951f37ed75fed4902e23030edb62fa74bb2464c->leave($__internal_96dc439bccf54dc55a95a6316951f37ed75fed4902e23030edb62fa74bb2464c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
