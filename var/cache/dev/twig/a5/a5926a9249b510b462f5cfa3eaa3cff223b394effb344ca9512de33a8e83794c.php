<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c541a5bfc1a858a6425e18da355d75ed5cdae469b93a998054908d7a468bb1db extends Twig_Template
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
        $__internal_90c765ed464efbf9db878ae18df7268b05fc23b022245278555256476713fb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c765ed464efbf9db878ae18df7268b05fc23b022245278555256476713fb04->enter($__internal_90c765ed464efbf9db878ae18df7268b05fc23b022245278555256476713fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_90c765ed464efbf9db878ae18df7268b05fc23b022245278555256476713fb04->leave($__internal_90c765ed464efbf9db878ae18df7268b05fc23b022245278555256476713fb04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
