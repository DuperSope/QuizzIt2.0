<?php

/* QuizzBundle:Quizz:reporterror.html.twig */
class __TwigTemplate_3f98a19d5c91f556765ff68f982b24bd91b3e15f09689879753ab0521829dbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "QuizzBundle:Quizz:reporterror.html.twig", 1);
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
        $__internal_32f6209e2a09c605c1593d5d6b72237a9e1e6ee27f633bfcd66aa7210a709931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f6209e2a09c605c1593d5d6b72237a9e1e6ee27f633bfcd66aa7210a709931->enter($__internal_32f6209e2a09c605c1593d5d6b72237a9e1e6ee27f633bfcd66aa7210a709931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "QuizzBundle:Quizz:reporterror.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f6209e2a09c605c1593d5d6b72237a9e1e6ee27f633bfcd66aa7210a709931->leave($__internal_32f6209e2a09c605c1593d5d6b72237a9e1e6ee27f633bfcd66aa7210a709931_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af48acbdf852349828de0117880d78b36690288b8b03d7cf21829a26051e7a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af48acbdf852349828de0117880d78b36690288b8b03d7cf21829a26051e7a8d->enter($__internal_af48acbdf852349828de0117880d78b36690288b8b03d7cf21829a26051e7a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Signaler une erreur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_af48acbdf852349828de0117880d78b36690288b8b03d7cf21829a26051e7a8d->leave($__internal_af48acbdf852349828de0117880d78b36690288b8b03d7cf21829a26051e7a8d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_527347065e922aa92b513151b19e1a1f41ad642cce85a4dc8e8c0e0974a8a46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527347065e922aa92b513151b19e1a1f41ad642cce85a4dc8e8c0e0974a8a46d->enter($__internal_527347065e922aa92b513151b19e1a1f41ad642cce85a4dc8e8c0e0974a8a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"container-fluid\">
              
        <div class='text-center row col-xs-8 col-xs-offset-2'>
            <h1>Signaler une erreur</h1><br/>
            ";
        // line 12
        if (((isset($context["reported"]) ? $context["reported"] : $this->getContext($context, "reported")) == 1)) {
            // line 13
            echo "                <p>Cette question a déjà été l'objet de nombreux signalements et n'en nécessite pas plus.</p>
                <a href='";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myresults");
            echo "'>Retour à Mes Résultats</a></p>
            ";
        } elseif ((        // line 15
(isset($context["reported"]) ? $context["reported"] : $this->getContext($context, "reported")) == 2)) {
            // line 16
            echo "                <p>Vous avez déjà signalé cette question, merci.</p>
                <a href='";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myresults");
            echo "'>Retour à Mes Résultats</a></p>
            ";
        } elseif ((        // line 18
(isset($context["reported"]) ? $context["reported"] : $this->getContext($context, "reported")) == 10)) {
            // line 19
            echo "                <p>Votre signalement a bien été envoyé, merci !</p>
                <a href='";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("myresults");
            echo "'>Retour à Mes Résultats</a></p>
            ";
        }
        // line 22
        echo "        </div>

        ";
        // line 24
        if (((isset($context["reported"]) ? $context["reported"] : $this->getContext($context, "reported")) == 0)) {
            // line 25
            echo "            <div class='text-center col-xs-6 col-xs-offset-1'>
                    <div class=' col-xs-10 col-xs-offset-1'>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "question", array()), "html", null, true);
            echo "
                            </div>
                        </div>

                    <div class=' col-xs-8 col-xs-offset-2'>        
                        ";
            // line 34
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questiontype", array()) == 1)) {
                // line 35
                echo "                            Réponse correcte :
                            <div class=\"alert alert-success\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "html", null, true);
                echo "</div>
                        ";
            } else {
                // line 38
                echo "                            ";
                $context["answers"] = twig_split_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answer", array()), "[||]");
                echo "           ";
                // line 39
                echo "                            ";
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
                    // line 40
                    echo "                                ";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 41
                        echo "                                ";
                    } else {
                        // line 42
                        echo "                                    ";
                        if ((twig_slice($this->env, $context["answer"], 0, 3) == "{T}")) {
                            echo "                           ";
                            // line 43
                            echo "                                        ";
                            $context["answer"] = twig_replace_filter($context["answer"], array("{T}" => ""));
                            echo "        ";
                            // line 44
                            echo "                                        ";
                            $context["class"] = "success";
                            echo "                         ";
                            // line 45
                            echo "                                    ";
                        } else {
                            // line 46
                            echo "                                        ";
                            $context["class"] = "danger";
                            echo "                          ";
                            // line 47
                            echo "                                    ";
                        }
                        // line 48
                        echo "
                                    <div class='alert alert-";
                        // line 49
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                        echo "</div>
                                ";
                    }
                    // line 51
                    echo "                            ";
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
                // line 52
                echo "                        ";
            }
            // line 53
            echo "                    </div>
                </div>
            </div>
                    
            <div class='text-center col-xs-3'>
                <br/><br/><h4>Contenu de l'erreur :</h4>
                
                ";
            // line 60
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "                       
                ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => " form-control ")));
            echo "
                <br/><br/><input type='submit' value='Envoyer' class=\"btn btn-primary\">
                ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question", array()), 'widget', array("attr" => array("value" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))));
            echo "
                <div class='hidden'>";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
            echo "</div>
            </div>

        ";
        }
        // line 68
        echo "        
    </div>
";
        
        $__internal_527347065e922aa92b513151b19e1a1f41ad642cce85a4dc8e8c0e0974a8a46d->leave($__internal_527347065e922aa92b513151b19e1a1f41ad642cce85a4dc8e8c0e0974a8a46d_prof);

    }

    public function getTemplateName()
    {
        return "QuizzBundle:Quizz:reporterror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 68,  220 => 64,  216 => 63,  211 => 61,  207 => 60,  198 => 53,  195 => 52,  181 => 51,  174 => 49,  171 => 48,  168 => 47,  164 => 46,  161 => 45,  157 => 44,  153 => 43,  149 => 42,  146 => 41,  143 => 40,  124 => 39,  120 => 38,  115 => 36,  112 => 35,  110 => 34,  102 => 29,  96 => 25,  94 => 24,  90 => 22,  85 => 20,  82 => 19,  80 => 18,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  64 => 13,  62 => 12,  55 => 7,  49 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Signaler une erreur - {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container-fluid\">
              
        <div class='text-center row col-xs-8 col-xs-offset-2'>
            <h1>Signaler une erreur</h1><br/>
            {% if reported == 1 %}
                <p>Cette question a déjà été l'objet de nombreux signalements et n'en nécessite pas plus.</p>
                <a href='{{path('myresults')}}'>Retour à Mes Résultats</a></p>
            {% elseif reported == 2 %}
                <p>Vous avez déjà signalé cette question, merci.</p>
                <a href='{{path('myresults')}}'>Retour à Mes Résultats</a></p>
            {% elseif reported == 10 %}
                <p>Votre signalement a bien été envoyé, merci !</p>
                <a href='{{path('myresults')}}'>Retour à Mes Résultats</a></p>
            {% endif %}
        </div>

        {% if reported == 0 %}
            <div class='text-center col-xs-6 col-xs-offset-1'>
                    <div class=' col-xs-10 col-xs-offset-1'>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-body\">
                                {{question.question }}
                            </div>
                        </div>

                    <div class=' col-xs-8 col-xs-offset-2'>        
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
                    </div>
                </div>
            </div>
                    
            <div class='text-center col-xs-3'>
                <br/><br/><h4>Contenu de l'erreur :</h4>
                
                {{form_start(form)}}                       
                {{form_widget(form.content, { 'attr': { 'class': ' form-control ' } }) }}
                <br/><br/><input type='submit' value='Envoyer' class=\"btn btn-primary\">
                {{ form_widget(form.question, { 'attr': { 'value': question.id } }) }}
                <div class='hidden'>{{ form_widget(form._token) }}</div>
            </div>

        {% endif %}
        
    </div>
{% endblock %}";
    }
}
