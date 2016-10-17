<?php

/* GeneralBundle:UserZone:myresults.html.twig */
class __TwigTemplate_c94da093e76a502a2cd5656bc18d373ea91048ce62708a13d109a8822d2a246f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle:UserZone:myresults.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_756a80dc8fa8d194ff6d3595221e152026f5fcd0d8556b7708707b6c459f4cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756a80dc8fa8d194ff6d3595221e152026f5fcd0d8556b7708707b6c459f4cf8->enter($__internal_756a80dc8fa8d194ff6d3595221e152026f5fcd0d8556b7708707b6c459f4cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:UserZone:myresults.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_756a80dc8fa8d194ff6d3595221e152026f5fcd0d8556b7708707b6c459f4cf8->leave($__internal_756a80dc8fa8d194ff6d3595221e152026f5fcd0d8556b7708707b6c459f4cf8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59360d1ea10a092c46b0c88ff61ae21feabdaa76fabb6277ac17a0c2c2eae1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59360d1ea10a092c46b0c88ff61ae21feabdaa76fabb6277ac17a0c2c2eae1cb->enter($__internal_59360d1ea10a092c46b0c88ff61ae21feabdaa76fabb6277ac17a0c2c2eae1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mes Résultats - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_59360d1ea10a092c46b0c88ff61ae21feabdaa76fabb6277ac17a0c2c2eae1cb->leave($__internal_59360d1ea10a092c46b0c88ff61ae21feabdaa76fabb6277ac17a0c2c2eae1cb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e5d7e024490034cbac6e13021fd236e08474bff34a97ff1de757383161e4045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5d7e024490034cbac6e13021fd236e08474bff34a97ff1de757383161e4045->enter($__internal_3e5d7e024490034cbac6e13021fd236e08474bff34a97ff1de757383161e4045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
        
";
        // line 10
        echo "        <div class=\"tabbable tabs-left \">
            <br />
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#quizzlist\" data-toggle=\"tab\">Mes Résultats</a></li>
                ";
        // line 14
        if (twig_length_filter($this->env, (isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")))) {
            echo "<li><a href=\"#reports\" data-toggle='tab'>Mes signalements</a></li>";
        }
        // line 15
        echo "            </ul>
        </div>
        
";
        // line 19
        echo "        <div class=\"tab-content col-xs-10\">

    ";
        // line 22
        echo "            <div class=\"col-xs-9 col-xs-offset-1 tab-pane active\" id=\"quizzlist\" >

                <h1 class=\"text-center\">Mes Résultats</h1>
                
                    <table class=\"text-center table table-striped\">
                        <tr>
                            <th class=\"text-center\">Nom du Quizz</th>
                            <th class=\"text-center\">Réussite</th>
                            <th class='text-center'>Date</th>
                        </tr>

                        ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["quizzdones"]) ? $context["quizzdones"] : $this->getContext($context, "quizzdones"))) == 0)) {
            // line 34
            echo "                            <tr><td colspan='3'></td></tr><tr></tr>
                            <tr>
                                <td class='text-center' colspan='3'><i>Vous n'avez pas encore effectué de Quizz.</i></td>
                            </tr>
                            <tr></tr><tr><td colspan='3'></td></tr>
                        ";
        }
        // line 40
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzdones"]) ? $context["quizzdones"] : $this->getContext($context, "quizzdones")));
        foreach ($context['_seq'] as $context["_key"] => $context["quizzdone"]) {
            // line 41
            echo "                            <tr>
                                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_result", array("quizzdoneid" => $this->getAttribute($context["quizzdone"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quizzdone"], "quizz", array()), "name", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["quizzdone"], "nbDo", array()) > 1)) {
                echo "<i><small>(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quizzdone"], "nbDo", array()), "html", null, true);
                echo ")</small></i>";
            }
            echo "</a></td>
                                <td><span class=\"";
            // line 43
            if (($this->getAttribute($context["quizzdone"], "percentage", array()) >= 75)) {
                echo " success";
            } elseif (($this->getAttribute($context["quizzdone"], "percentage", array()) >= 40)) {
                echo " warning";
            } else {
                echo " danger";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizzdone"], "percentage", array()), "html", null, true);
            echo "%</span></td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quizzdone"], "date", array()), "d/m/y"), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizzdone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </table>
            
            </div>
                
               
    ";
        // line 53
        echo "            ";
        if (twig_length_filter($this->env, (isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")))) {
            // line 54
            echo "                
                <div class=\"col-xs-9 tab-pane\" id=\"reports\" >
                    <div class=\"tabbable tabs-left\" id=\"errorslateral\">
                        <ul class=\"nav nav-tabs text-center\">
                            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 59
                echo "                                 <li class=\"";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " active ";
                }
                echo "\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">Report n°";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "question", array()), "id", array()), "html", null, true);
                echo "</a></li>
                             ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                        </ul>
                    </div>
                    
                    <div class='text-center tab-content col-xs-9'>
                   
                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "                            <div  id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "id", array()), "html", null, true);
                echo "\" class='tab-pane ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " active ";
                }
                echo "'>
                                <div class=\"col-xs-10 col-xs-offset-2\">
                                    
                                    <div class='alert alert-";
                // line 70
                if (($this->getAttribute($context["error"], "status", array()) == 2)) {
                    echo "success";
                } elseif (($this->getAttribute($context["error"], "status", array()) == 3)) {
                    echo "danger";
                } else {
                    echo "warning";
                }
                echo "'>
                                        Signalement marqué comme : ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "strStatus", array()), "html", null, true);
                echo "<hr/>
                                        \"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "content", array()), "html", null, true);
                echo "\"
                                    </div>
                                    
                                    <h2>Question n°";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["error"], "question", array()), "id", array()), "html", null, true);
                echo "</h2> <br />

                                    ";
                // line 77
                $context["question"] = $this->getAttribute($context["error"], "question", array());
                // line 78
                echo "                                    ";
                $this->loadTemplate("QuizzBundle:Template:question.html.twig", "GeneralBundle:UserZone:myresults.html.twig", 78)->display($context);
                // line 79
                echo "                                    
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                       </div>

                </div>
                       
            ";
        }
        // line 88
        echo "                    
        </div>
";
        
        $__internal_3e5d7e024490034cbac6e13021fd236e08474bff34a97ff1de757383161e4045->leave($__internal_3e5d7e024490034cbac6e13021fd236e08474bff34a97ff1de757383161e4045_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:UserZone:myresults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 88,  280 => 83,  263 => 79,  260 => 78,  258 => 77,  253 => 75,  247 => 72,  243 => 71,  233 => 70,  222 => 67,  205 => 66,  198 => 61,  175 => 59,  158 => 58,  152 => 54,  149 => 53,  142 => 47,  133 => 44,  121 => 43,  109 => 42,  106 => 41,  101 => 40,  93 => 34,  91 => 33,  78 => 22,  74 => 19,  69 => 15,  65 => 14,  59 => 10,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Mes Résultats - {{ parent() }} {% endblock %}


{% block body %}
    <div class=\"container-fluid\">
        
{#        ONGLET PRINCIPAL GAUCHE   #}
        <div class=\"tabbable tabs-left \">
            <br />
            <ul class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#quizzlist\" data-toggle=\"tab\">Mes Résultats</a></li>
                {% if reports|length() %}<li><a href=\"#reports\" data-toggle='tab'>Mes signalements</a></li>{% endif %}
            </ul>
        </div>
        
{#        TAB-CONTENT PRINCIPAL     #}
        <div class=\"tab-content col-xs-10\">

    {#        Liste des résultats       #}
            <div class=\"col-xs-9 col-xs-offset-1 tab-pane active\" id=\"quizzlist\" >

                <h1 class=\"text-center\">Mes Résultats</h1>
                
                    <table class=\"text-center table table-striped\">
                        <tr>
                            <th class=\"text-center\">Nom du Quizz</th>
                            <th class=\"text-center\">Réussite</th>
                            <th class='text-center'>Date</th>
                        </tr>

                        {% if quizzdones|length() == 0 %}
                            <tr><td colspan='3'></td></tr><tr></tr>
                            <tr>
                                <td class='text-center' colspan='3'><i>Vous n'avez pas encore effectué de Quizz.</i></td>
                            </tr>
                            <tr></tr><tr><td colspan='3'></td></tr>
                        {% endif %}
                        {% for quizzdone in quizzdones %}
                            <tr>
                                <td><a href=\"{{ path('quizz_result', { 'quizzdoneid' : quizzdone.id }) }}\">{{ quizzdone.quizz.name }} {% if quizzdone.nbDo > 1 %}<i><small>({{ quizzdone.nbDo }})</small></i>{% endif %}</a></td>
                                <td><span class=\"{% if(quizzdone.percentage >= 75) %} success{% elseif(quizzdone.percentage >= 40) %} warning{% else %} danger{% endif %}\">{{ quizzdone.percentage }}%</span></td>
                                <td>{{quizzdone.date|date('d/m/y') }}</td>
                            </tr>
                        {% endfor %}
                    </table>
            
            </div>
                
               
    {#        Liste des erreurs signalées   #}
            {% if reports|length() %}
                
                <div class=\"col-xs-9 tab-pane\" id=\"reports\" >
                    <div class=\"tabbable tabs-left\" id=\"errorslateral\">
                        <ul class=\"nav nav-tabs text-center\">
                            {% for error in reports %}
                                 <li class=\"{% if loop.first %} active {% endif %}\"><a href=\"#{{error.id}}\" data-toggle=\"tab\">Report n°{{error.question.id}}</a></li>
                             {% endfor %}
                        </ul>
                    </div>
                    
                    <div class='text-center tab-content col-xs-9'>
                   
                        {% for error in reports %}
                            <div  id=\"{{error.id}}\" class='tab-pane {% if loop.first %} active {% endif %}'>
                                <div class=\"col-xs-10 col-xs-offset-2\">
                                    
                                    <div class='alert alert-{% if error.status == 2%}success{% elseif error.status == 3 %}danger{% else %}warning{%endif %}'>
                                        Signalement marqué comme : {{ error.strStatus }}<hr/>
                                        \"{{ error.content }}\"
                                    </div>
                                    
                                    <h2>Question n°{{error.question.id}}</h2> <br />

                                    {% set question = error.question %}
                                    {% include \"QuizzBundle:Template:question.html.twig\" %}
                                    
                                </div>
                            </div>
                        {% endfor %}
                       </div>

                </div>
                       
            {% endif %}
                    
        </div>
{% endblock %}
";
    }
}
