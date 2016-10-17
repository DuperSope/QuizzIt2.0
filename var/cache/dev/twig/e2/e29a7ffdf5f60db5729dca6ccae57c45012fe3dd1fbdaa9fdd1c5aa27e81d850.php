<?php

/* QuizzBundle:Form:rating.html.twig */
class __TwigTemplate_26ccee36737e2047c46e4f33cb377c19ecad1063bc32ce5faa3e2bd9df6e2168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'rating_widget' => array($this, 'block_rating_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b15eefdee94513213d65268688b487537677636a2a6da78a34118758017ef878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15eefdee94513213d65268688b487537677636a2a6da78a34118758017ef878->enter($__internal_b15eefdee94513213d65268688b487537677636a2a6da78a34118758017ef878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Form:rating.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('rating_widget', $context, $blocks);
        
        $__internal_b15eefdee94513213d65268688b487537677636a2a6da78a34118758017ef878->leave($__internal_b15eefdee94513213d65268688b487537677636a2a6da78a34118758017ef878_prof);

    }

    public function block_rating_widget($context, array $blocks = array())
    {
        $__internal_f0555de741dac112e8b70b760773c4a28c28f1a718ac8a3cda5dd6bdae97372e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0555de741dac112e8b70b760773c4a28c28f1a718ac8a3cda5dd6bdae97372e->enter($__internal_f0555de741dac112e8b70b760773c4a28c28f1a718ac8a3cda5dd6bdae97372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rating_widget"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " >
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 7
            echo "                <label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "id", array()), "html", null, true);
            echo "\">
                    <i class=\"fa fa-star\"></i>
                </label>
                ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f0555de741dac112e8b70b760773c4a28c28f1a718ac8a3cda5dd6bdae97372e->leave($__internal_f0555de741dac112e8b70b760773c4a28c28f1a718ac8a3cda5dd6bdae97372e_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Form:rating.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  57 => 10,  50 => 7,  46 => 6,  41 => 5,  38 => 4,  26 => 3,  23 => 2,);
    }

    public function getSource()
    {
        return "{# src/QuizzBundle/Resources/views/Form/rating.html.twig #}

{% block rating_widget %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }} >
            {% for child in form %}
                <label for=\"{{ child.vars.id }}\">
                    <i class=\"fa fa-star\"></i>
                </label>
                {{ form_widget(child) }}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock rating_widget %}";
    }
}
