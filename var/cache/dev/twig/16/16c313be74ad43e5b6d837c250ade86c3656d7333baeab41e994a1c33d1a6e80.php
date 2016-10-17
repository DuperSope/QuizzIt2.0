<?php

/* UserBundle::publicprofile.html.twig */
class __TwigTemplate_df0ce4355578f2e6194ade3b708c4f1c11b201da972c0b73cde640c7f3ea4706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle::publicprofile.html.twig", 1);
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
        $__internal_119e1e851ff298fda6111e48e2781810cae0069c871fb7354adf0e046d24e30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119e1e851ff298fda6111e48e2781810cae0069c871fb7354adf0e046d24e30c->enter($__internal_119e1e851ff298fda6111e48e2781810cae0069c871fb7354adf0e046d24e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::publicprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_119e1e851ff298fda6111e48e2781810cae0069c871fb7354adf0e046d24e30c->leave($__internal_119e1e851ff298fda6111e48e2781810cae0069c871fb7354adf0e046d24e30c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d705993a9abfb939bed9da75256d8f5ba9ff1a4b8066405b705202990dbaee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d705993a9abfb939bed9da75256d8f5ba9ff1a4b8066405b705202990dbaee3->enter($__internal_0d705993a9abfb939bed9da75256d8f5ba9ff1a4b8066405b705202990dbaee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_0d705993a9abfb939bed9da75256d8f5ba9ff1a4b8066405b705202990dbaee3->leave($__internal_0d705993a9abfb939bed9da75256d8f5ba9ff1a4b8066405b705202990dbaee3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f75dbe3f1ca19eded537f9f46a73f1e13e543558149bf329e304a14df16a2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f75dbe3f1ca19eded537f9f46a73f1e13e543558149bf329e304a14df16a2fb->enter($__internal_2f75dbe3f1ca19eded537f9f46a73f1e13e543558149bf329e304a14df16a2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    <div class=\"container-fluid\">
        
        <div class=\"col-xs-offset-2 col-xs-8\">
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 12
            echo "                ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                echo "<div class=\"text-center\"><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privateprofile", array("userid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "'>Aller sur mon espace privé</a><hr /></div>";
            }
            // line 13
            echo "            ";
        }
        // line 14
        echo "            <h1>Profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " : </h1><br/>
            
            <div class='row'><br/>
                
                <div class='col-xs-5'>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Description personnelle :
                        </div>
                        <div class=\"panel-body\">
                            ";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array())) == 0)) {
            // line 25
            echo "                                <i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo " n'a pas écrit de description pour le moment.</i>
                            ";
        }
        // line 26
        echo "    
                            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "description", array()), "html", null, true);
        echo "
                        </div>
                    </div>
                        
                    <div class='text-center'>
                        <i>Inscrit depuis le ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date", array()), "d/m/y"), "html", null, true);
        echo "</i>
                    </div>
                </div>
                

                <div class='col-xs-5 col-xs-offset-1'>
                    <div class=\"text-center\">
                        <h5>Nombre de Quizz : ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nbQuizz", array()), "html", null, true);
        echo "</h5>
                        ";
        // line 40
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nbQuizz", array()) != twig_length_filter($this->env, (isset($context["quizzs"]) ? $context["quizzs"] : $this->getContext($context, "quizzs"))))) {
            // line 41
            echo "                            <small><i>Certains Quizz sont privés et n'apparaissent pas dans la liste.</i></small>
                        ";
        }
        // line 43
        echo "                    </div>
                        
                    <br/>
                    <table class='table table-condensed'>
                        ";
        // line 47
        if ((twig_length_filter($this->env, (isset($context["quizzs"]) ? $context["quizzs"] : $this->getContext($context, "quizzs"))) > 0)) {
            // line 48
            echo "                            <tr>
                                <th class=\"text-center\">Nom du Quizz</th>
                                <th class=\"text-center\">Note</th>
                            </tr>
                        ";
        }
        // line 53
        echo "                        
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzs"]) ? $context["quizzs"] : $this->getContext($context, "quizzs")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["quizz"]) {
            // line 55
            echo "                            <tr>
                                <td><a href='";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => $this->getAttribute($context["quizz"], "id", array()))), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "name", array()), "html", null, true);
            echo "</a></td>
                                <td class='text-center'>";
            // line 57
            $this->loadTemplate("QuizzBundle:Template:rate.html.twig", "UserBundle::publicprofile.html.twig", 57)->display($context);
            echo "</td>
                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quizz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </table>
                    
                </div>
            </div>
        </div>
       
    </div>
";
        
        $__internal_2f75dbe3f1ca19eded537f9f46a73f1e13e543558149bf329e304a14df16a2fb->leave($__internal_2f75dbe3f1ca19eded537f9f46a73f1e13e543558149bf329e304a14df16a2fb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::publicprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  172 => 57,  166 => 56,  163 => 55,  146 => 54,  143 => 53,  136 => 48,  134 => 47,  128 => 43,  124 => 41,  122 => 40,  118 => 39,  108 => 32,  100 => 27,  97 => 26,  91 => 25,  89 => 24,  75 => 14,  72 => 13,  65 => 12,  63 => 11,  57 => 7,  51 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Profil de {{ user.username }} - {{ parent() }} {% endblock %}


{% block body %}
    
    <div class=\"container-fluid\">
        
        <div class=\"col-xs-offset-2 col-xs-8\">
            {% if app.user.id is defined %}
                {% if user.id == app.user.id %}<div class=\"text-center\"><a href='{{path('privateprofile', { 'userid': user.id })}}'>Aller sur mon espace privé</a><hr /></div>{% endif %}
            {% endif %}
            <h1>Profil de {{user.username}} : </h1><br/>
            
            <div class='row'><br/>
                
                <div class='col-xs-5'>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            Description personnelle :
                        </div>
                        <div class=\"panel-body\">
                            {% if user.description|length == 0 %}
                                <i>{{ user.username }} n'a pas écrit de description pour le moment.</i>
                            {% endif %}    
                            {{ user.description }}
                        </div>
                    </div>
                        
                    <div class='text-center'>
                        <i>Inscrit depuis le {{user.date|date('d/m/y') }}</i>
                    </div>
                </div>
                

                <div class='col-xs-5 col-xs-offset-1'>
                    <div class=\"text-center\">
                        <h5>Nombre de Quizz : {{user.nbQuizz}}</h5>
                        {% if user.nbQuizz != quizzs|length() %}
                            <small><i>Certains Quizz sont privés et n'apparaissent pas dans la liste.</i></small>
                        {% endif %}
                    </div>
                        
                    <br/>
                    <table class='table table-condensed'>
                        {% if quizzs|length() > 0 %}
                            <tr>
                                <th class=\"text-center\">Nom du Quizz</th>
                                <th class=\"text-center\">Note</th>
                            </tr>
                        {% endif %}
                        
                        {% for quizz in quizzs %}
                            <tr>
                                <td><a href='{{path('quizz_preview', { 'quizzid': quizz.id }) }}'>{{quizz.name }}</a></td>
                                <td class='text-center'>{% include \"QuizzBundle:Template:rate.html.twig\" %}</td>
                            </tr>
                        {% endfor %}
                    </table>
                    
                </div>
            </div>
        </div>
       
    </div>
{% endblock %}";
    }
}
