<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2b1b8cee2544bec3c48bc25392c796b1ad73bf81caefac4002605ee008eb1b5d extends Twig_Template
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
        $__internal_38a01f13228743860483f3c709acbe68bd26890177835f3ddefc6534da77de82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a01f13228743860483f3c709acbe68bd26890177835f3ddefc6534da77de82->enter($__internal_38a01f13228743860483f3c709acbe68bd26890177835f3ddefc6534da77de82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_38a01f13228743860483f3c709acbe68bd26890177835f3ddefc6534da77de82->leave($__internal_38a01f13228743860483f3c709acbe68bd26890177835f3ddefc6534da77de82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
