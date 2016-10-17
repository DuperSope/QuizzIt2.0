<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d0d2b6babdecd288b393c9853f657d1667294f913efd0d3de6a0cce183d0b7ae extends Twig_Template
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
        $__internal_b074a37176940faa1287f03d843974c0cf8910ecfffe2fac2919c2be340ca4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b074a37176940faa1287f03d843974c0cf8910ecfffe2fac2919c2be340ca4ac->enter($__internal_b074a37176940faa1287f03d843974c0cf8910ecfffe2fac2919c2be340ca4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b074a37176940faa1287f03d843974c0cf8910ecfffe2fac2919c2be340ca4ac->leave($__internal_b074a37176940faa1287f03d843974c0cf8910ecfffe2fac2919c2be340ca4ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
