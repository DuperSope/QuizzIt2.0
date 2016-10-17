<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f7535cc0d94568a476b81a34c18a555f282da4aae4b48b070394f6a5565a2c60 extends Twig_Template
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
        $__internal_48c4b20af7a359c87cbdaeea8328a7ce8812bef123a30463427cccc5c8bf2be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c4b20af7a359c87cbdaeea8328a7ce8812bef123a30463427cccc5c8bf2be1->enter($__internal_48c4b20af7a359c87cbdaeea8328a7ce8812bef123a30463427cccc5c8bf2be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_48c4b20af7a359c87cbdaeea8328a7ce8812bef123a30463427cccc5c8bf2be1->leave($__internal_48c4b20af7a359c87cbdaeea8328a7ce8812bef123a30463427cccc5c8bf2be1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
