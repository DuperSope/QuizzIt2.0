<?php

/* QuizzBundle:Template:question.html.twig */
class __TwigTemplate_7861268a38ab8a0c82e9729c7bc5090d4165063f093404c2356b39fbe6e9990d extends Twig_Template
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
        $__internal_665298e8f40b0b91aed2d29bdc25b121a9dc6126b2e2476a1dc5223e6a9138dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665298e8f40b0b91aed2d29bdc25b121a9dc6126b2e2476a1dc5223e6a9138dc->enter($__internal_665298e8f40b0b91aed2d29bdc25b121a9dc6126b2e2476a1dc5223e6a9138dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Template:question.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "deleted", array()) == 1)) {
            // line 2
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            La question a été supprimée.
        </div>
    </div>
";
        } else {
            // line 8
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question", array()), "html", null, true);
            echo "
        </div>
    </div>

    ";
            // line 14
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
                // line 15
                echo "        Réponse correcte :
        <div class=\"alert alert-success\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 18
                echo "        ";
                $context["answers"] = twig_split_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "[||]");
                echo "           ";
                // line 19
                echo "        ";
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
                    // line 20
                    echo "            ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 21
                        echo "            ";
                    } else {
                        // line 22
                        echo "                ";
                        if ((twig_slice($this->env, $context["answer"], 0, 3) == "{T}")) {
                            echo "                           ";
                            // line 23
                            echo "                    ";
                            $context["answer"] = twig_replace_filter($context["answer"], array("{T}" => ""));
                            echo "        ";
                            // line 24
                            echo "                    ";
                            $context["class"] = "success";
                            echo "                         ";
                            // line 25
                            echo "                ";
                        } else {
                            // line 26
                            echo "                    ";
                            $context["class"] = "danger";
                            echo "                          ";
                            // line 27
                            echo "                ";
                        }
                        // line 28
                        echo "
                <div class='alert alert-";
                        // line 29
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                        echo "</div>
            ";
                    }
                    // line 31
                    echo "        ";
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
                // line 32
                echo "    ";
            }
            // line 33
            echo "    
    ";
            // line 34
            if (($this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "question", array()), "date", array()) > $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "date", array()))) {
                // line 35
                echo "        <br/>
        <small><i>La question a récemment été modifiée.</i></small>
    ";
            }
            // line 38
            echo "    
";
        }
        
        $__internal_665298e8f40b0b91aed2d29bdc25b121a9dc6126b2e2476a1dc5223e6a9138dc->leave($__internal_665298e8f40b0b91aed2d29bdc25b121a9dc6126b2e2476a1dc5223e6a9138dc_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Template:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  136 => 35,  134 => 34,  131 => 33,  128 => 32,  114 => 31,  107 => 29,  104 => 28,  101 => 27,  97 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  79 => 21,  76 => 20,  57 => 19,  53 => 18,  48 => 16,  45 => 15,  43 => 14,  36 => 10,  32 => 8,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if question.deleted == 1 %}
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            La question a été supprimée.
        </div>
    </div>
{% else %}
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{question.question }}
        </div>
    </div>

    {% if question.questiontype == 1 %}
        Réponse correcte :
        <div class=\"alert alert-success\">{{ question.answer }}</div>
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

                <div class='alert alert-{{class }}'>{{ answer }}</div>
            {% endif %}
        {% endfor %}
    {% endif %}
    
    {% if error.question.date > error.date %}
        <br/>
        <small><i>La question a récemment été modifiée.</i></small>
    {% endif %}
    
{% endif %}";
    }
}
