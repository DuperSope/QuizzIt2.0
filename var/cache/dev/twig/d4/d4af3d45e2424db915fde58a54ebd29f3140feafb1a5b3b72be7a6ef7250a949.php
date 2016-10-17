<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b89bbd98321bb81e95cb7af187a7ecfb133c3009319ab7133c2b99ae8b1d97ff extends Twig_Template
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
        $__internal_611d545f3cd8ae0d73610acab7f80103d9d81192f5773cc68e3fd129f000fd71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611d545f3cd8ae0d73610acab7f80103d9d81192f5773cc68e3fd129f000fd71->enter($__internal_611d545f3cd8ae0d73610acab7f80103d9d81192f5773cc68e3fd129f000fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_611d545f3cd8ae0d73610acab7f80103d9d81192f5773cc68e3fd129f000fd71->leave($__internal_611d545f3cd8ae0d73610acab7f80103d9d81192f5773cc68e3fd129f000fd71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
