<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b8f9864dd7f79afde4239df465b89c1a2a31032c40a5a098af70219e8adaa0c1 extends Twig_Template
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
        $__internal_092575a6aa61a171b9a1bcde695a15c9e665531d6d8ea80c4f8c587db3254d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092575a6aa61a171b9a1bcde695a15c9e665531d6d8ea80c4f8c587db3254d15->enter($__internal_092575a6aa61a171b9a1bcde695a15c9e665531d6d8ea80c4f8c587db3254d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_092575a6aa61a171b9a1bcde695a15c9e665531d6d8ea80c4f8c587db3254d15->leave($__internal_092575a6aa61a171b9a1bcde695a15c9e665531d6d8ea80c4f8c587db3254d15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
