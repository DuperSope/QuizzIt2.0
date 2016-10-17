<?php

/* QuizzBundle:Template:questiondone.html.twig */
class __TwigTemplate_3a30903d33a53acfd25c89590df8ff2142ef54d55a64eaddebe74b9035dbb490 extends Twig_Template
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
        $__internal_0b925829cfc29dc56d17aeab3f483ee2347c6a22156510767e1d9aa20d00ed35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b925829cfc29dc56d17aeab3f483ee2347c6a22156510767e1d9aa20d00ed35->enter($__internal_0b925829cfc29dc56d17aeab3f483ee2347c6a22156510767e1d9aa20d00ed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Template:questiondone.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["questiondone"]) ? $context["questiondone"] : $this->getContext($context, "questiondone")), "answerValid", array()) == 1)) {
                // line 3
                echo "        Votre réponse : 
        <div class=\"alert alert-success\">";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 6
                echo "        Votre réponse : 
        <div class=\"alert alert-danger\">";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["questiondone"]) ? $context["questiondone"] : $this->getContext($context, "questiondone")), "answer", array()), "html", null, true);
                echo "</div>
        Réponse correcte :
        <div class=\"alert alert-success\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "html", null, true);
                echo "</div>
    ";
            }
            // line 11
            echo "
";
        } else {
            // line 13
            echo "    ";
            $context["answers"] = twig_split_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "[||]");
            echo "           ";
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : $this->getContext($context, "answers")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                echo "                                 ";
                // line 15
                echo "        ";
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    if ((twig_slice($this->env, $context["answer"], 0, 3) == "{T}")) {
                        echo "                           ";
                        // line 18
                        echo "                ";
                        $context["answer"] = twig_replace_filter($context["answer"], array("{T}" => ""));
                        echo "        ";
                        // line 19
                        echo "                ";
                        $context["class"] = "success";
                        echo "                         ";
                        // line 20
                        echo "            ";
                    } else {
                        // line 21
                        echo "                ";
                        $context["class"] = "danger";
                        echo "                          ";
                        // line 22
                        echo "            ";
                    }
                    // line 23
                    echo "
            ";
                    // line 24
                    if (($context["answer"] == $this->getAttribute((isset($context["questiondone"]) ? $context["questiondone"] : $this->getContext($context, "questiondone")), "answer", array()))) {
                        echo "                  ";
                        // line 25
                        echo "                ";
                        $context["myquestion"] = 1;
                        // line 26
                        echo "            ";
                    } else {
                        // line 27
                        echo "                ";
                        $context["myquestion"] = 0;
                        // line 28
                        echo "            ";
                    }
                    // line 29
                    echo "
            <div class='alert alert-";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "'>";
                    if (((isset($context["myquestion"]) ? $context["myquestion"] : $this->getContext($context, "myquestion")) == 1)) {
                        echo "<b>Votre réponse : </b>";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                    echo "</div>
        ";
                }
                // line 32
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 34
        echo "
";
        // line 35
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "deleted", array()) == 1)) {
            // line 36
            echo "    <small><i>La question a été supprimée.</i></small>
";
        } elseif (($this->getAttribute(        // line 37
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "date", array()) > $this->getAttribute((isset($context["quizzdone"]) ? $context["quizzdone"] : $this->getContext($context, "quizzdone")), "date", array()))) {
            // line 38
            echo "    <small><i>La question a récemment été modifiée, pouvant entraîner des incohérences d'affichage.</i></small>
";
        }
        // line 40
        echo "
<hr/>
";
        // line 42
        if (($this->getAttribute((isset($context["quizz"]) ? $context["quizz"] : $this->getContext($context, "quizz")), "deleted", array()) == 0)) {
            echo "<small><i><a class='no-deco' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_reporterror", array("questionid" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))), "html", null, true);
            echo "\">Signaler une erreur</a></i></small>";
        }
        
        $__internal_0b925829cfc29dc56d17aeab3f483ee2347c6a22156510767e1d9aa20d00ed35->leave($__internal_0b925829cfc29dc56d17aeab3f483ee2347c6a22156510767e1d9aa20d00ed35_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Template:questiondone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 42,  164 => 40,  160 => 38,  158 => 37,  155 => 36,  153 => 35,  150 => 34,  135 => 32,  124 => 30,  121 => 29,  118 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  103 => 23,  100 => 22,  96 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  78 => 16,  75 => 15,  56 => 14,  52 => 13,  48 => 11,  43 => 9,  38 => 7,  35 => 6,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if question.questiontype == 1 %}
    {% if questiondone.answerValid == 1 %}
        Votre réponse : 
        <div class=\"alert alert-success\">{{ question.answer }}</div>
    {% else %}
        Votre réponse : 
        <div class=\"alert alert-danger\">{{ questiondone.answer }}</div>
        Réponse correcte :
        <div class=\"alert alert-success\">{{ question.answer }}</div>
    {% endif %}

{% else %}
    {% set answers = question.answer|split('[||]') %}           {#Je sépare les différentes réponses#}
    {% for answer in answers %}                                 {#Pour chaque réponse#}
        {% if loop.last %}
        {% else %}
            {% if answer[0:3] == \"{T}\" %}                           {#Je regarde si c'est la juste#}
                {% set answer = answer|replace({'{T}' : ''}) %}        {#Si oui j'enlève le {T}#}
                {% set class = \"success\" %}                         {#Et je mets la classe success#}
            {% else %}
                {% set class = \"danger\" %}                          {#Sinon je mets la classe danger#}
            {% endif %}

            {% if answer == questiondone.answer %}                  {#Si c'est la réponse qu'on a choisi#}
                {% set myquestion = 1 %}
            {% else %}
                {% set myquestion = 0 %}
            {% endif %}

            <div class='alert alert-{{class }}'>{% if myquestion == 1%}<b>Votre réponse : </b>{% endif %} {{ answer }}</div>
        {% endif %}
    {% endfor %}
{% endif %}

{% if question.deleted == 1 %}
    <small><i>La question a été supprimée.</i></small>
{% elseif question.date > quizzdone.date %}
    <small><i>La question a récemment été modifiée, pouvant entraîner des incohérences d'affichage.</i></small>
{% endif %}

<hr/>
{% if quizz.deleted == 0 %}<small><i><a class='no-deco' href=\"{{path('quizz_reporterror', { 'questionid': question.id }) }}\">Signaler une erreur</a></i></small>{% endif %}";
    }
}
