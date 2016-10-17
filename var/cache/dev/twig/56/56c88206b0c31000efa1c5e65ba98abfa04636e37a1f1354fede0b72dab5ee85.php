<?php

/* QuizzBundle:Template:rate.html.twig */
class __TwigTemplate_450dea8fd2f3a8a775356ebc89d2c653dc177edf95c9a13b1d655bc84d908338 extends Twig_Template
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
        $__internal_ae7fb361ea819d44fdf71b511ffc205a52eeb32ca9c6ac391346fb2048e59a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7fb361ea819d44fdf71b511ffc205a52eeb32ca9c6ac391346fb2048e59a34->enter($__internal_ae7fb361ea819d44fdf71b511ffc205a52eeb32ca9c6ac391346fb2048e59a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Template:rate.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "rate", array()) >= $context["i"])) {
                // line 3
                echo "        <i class=\"fa fa-star rating-full\"></i>
    ";
            } elseif (($this->getAttribute(            // line 4
(isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "rate", array()) >= ($context["i"] - 0.5))) {
                // line 5
                echo "        <i class=\"fa fa-star-half-o rating-full\"></i>
    ";
            } else {
                // line 7
                echo "        <i class=\"fa fa-star-o rating-empty\"></i>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ae7fb361ea819d44fdf71b511ffc205a52eeb32ca9c6ac391346fb2048e59a34->leave($__internal_ae7fb361ea819d44fdf71b511ffc205a52eeb32ca9c6ac391346fb2048e59a34_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Template:rate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 5,  32 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for i in 1..5 %}
    {% if quizz.rate >= i %}
        <i class=\"fa fa-star rating-full\"></i>
    {% elseif quizz.rate >= i-0.5 %}
        <i class=\"fa fa-star-half-o rating-full\"></i>
    {% else %}
        <i class=\"fa fa-star-o rating-empty\"></i>
    {% endif %}
{% endfor %}";
    }
}
