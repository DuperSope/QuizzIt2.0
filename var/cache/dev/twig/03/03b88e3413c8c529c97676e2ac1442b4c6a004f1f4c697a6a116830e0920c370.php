<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_3a3f0cec55df0ec104684ed651df32ab7796a08843ceb2927a94ede8741a4134 extends Twig_Template
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
        $__internal_fdb657ca85ce18f178fa6670cc029186d77a878c9e5286769885d9f69934182f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb657ca85ce18f178fa6670cc029186d77a878c9e5286769885d9f69934182f->enter($__internal_fdb657ca85ce18f178fa6670cc029186d77a878c9e5286769885d9f69934182f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fdb657ca85ce18f178fa6670cc029186d77a878c9e5286769885d9f69934182f->leave($__internal_fdb657ca85ce18f178fa6670cc029186d77a878c9e5286769885d9f69934182f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
