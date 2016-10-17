<?php

/* GeneralBundle::index.html.twig */
class __TwigTemplate_e14593ea02149e76c1e6e1350452e960ec0254d98008db5461555fd44813fb13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GeneralBundle::index.html.twig", 1);
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
        $__internal_ca6f0a4c4a22ce412c00eadcae206b67b389d70450cd6ab847f3ad425faec526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6f0a4c4a22ce412c00eadcae206b67b389d70450cd6ab847f3ad425faec526->enter($__internal_ca6f0a4c4a22ce412c00eadcae206b67b389d70450cd6ab847f3ad425faec526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca6f0a4c4a22ce412c00eadcae206b67b389d70450cd6ab847f3ad425faec526->leave($__internal_ca6f0a4c4a22ce412c00eadcae206b67b389d70450cd6ab847f3ad425faec526_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3c168a718028c36aeb6118312440354fbd94d2bcae38488662b95f21cc800e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c168a718028c36aeb6118312440354fbd94d2bcae38488662b95f21cc800e4->enter($__internal_e3c168a718028c36aeb6118312440354fbd94d2bcae38488662b95f21cc800e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_e3c168a718028c36aeb6118312440354fbd94d2bcae38488662b95f21cc800e4->leave($__internal_e3c168a718028c36aeb6118312440354fbd94d2bcae38488662b95f21cc800e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_30a52a7b00cab351fe36432d7382076376a5ba2ccae1ab3383d84e2d72859340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a52a7b00cab351fe36432d7382076376a5ba2ccae1ab3383d84e2d72859340->enter($__internal_30a52a7b00cab351fe36432d7382076376a5ba2ccae1ab3383d84e2d72859340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div class=\"col-xs-10 col-xs-offset-1 text-center\">
        <h1>";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a240c67_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a240c67_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a240c67_logo_1.png");
            // line 9
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" height=\"100px\"/>
        ";
        } else {
            // asset "a240c67"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a240c67") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/a240c67.png");
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" height=\"100px\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "<br />
        Bienvenue sur Quizz It</h1>
        <h6>Le site web de création de Quizz en tous genres !</h6>
        <hr />
        
        <div id='mostpop' class='col-xs-4'>
            <h3>Quizz les plus populaires</h3>
            
            <table class=\"table table-striped\">
                    <tr>
                        <th class=\"text-center\">Nom du Quizz</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\"><abbr title=\"(nombre d'utilisateurs ayant effectué le Quizz)\">Fait</abbr></th>
                    </tr>
                    
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzpop"]) ? $context["quizzpop"] : $this->getContext($context, "quizzpop")));
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
            // line 26
            echo "                        <tr>
                            <td class=\"text-center\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => $this->getAttribute($this->getAttribute($context["quizz"], "quizz", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quizz"], "quizz", array()), "name", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getAttribute($context["quizz"], "quizz", array()), "private", array()) == 1)) {
                echo "<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>";
            }
            echo "</a></td>
                            <td class=\"text-center\">";
            // line 28
            $this->loadTemplate("QuizzBundle:Template:rate.html.twig", "GeneralBundle::index.html.twig", 28)->display($context);
            echo "</td>
                            <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quizz"], "quizz", array()), "done", array()), "html", null, true);
            echo " fois</td>
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
        // line 32
        echo "            </table>
            
        </div>
        
        <div id='newest' class='col-xs-4'>
            <h3>Quizz les plus récents</h3>
            
            <table class=\"table table-striped\">
                    <tr>
                        <th class=\"text-center\">Nom du Quizz</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\"><abbr title=\"(nombre d'utilisateurs ayant effectué le Quizz)\">Fait</abbr></th>
                    </tr>
                    
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizznew"]) ? $context["quizznew"] : $this->getContext($context, "quizznew")));
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
            // line 47
            echo "                        <tr>
                            <td class=\"text-center\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quizz_preview", array("quizzid" => $this->getAttribute($context["quizz"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "name", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["quizz"], "private", array()) == 1)) {
                echo "<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>";
            }
            echo "</a></td>
                            <td class=\"text-center\">";
            // line 49
            $this->loadTemplate("QuizzBundle:Template:rate.html.twig", "GeneralBundle::index.html.twig", 49)->display($context);
            echo "</td>
                            <td class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["quizz"], "done", array()), "html", null, true);
            echo " fois</td>
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
        // line 53
        echo "            </table>
        </div>
        
        <div id='leftmenu' class='col-xs-3 col-xs-offset-1'>
            <ul class=\"list-group text-center\">
                <li class=\"list-group-item\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">Rechercher un Quizz</a></li>
                <li class=\"list-group-item\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bytheme");
        echo "\">Rechercher par thème</a></li>
            </ul>
        </div>

        
    </div>
    


";
        
        $__internal_30a52a7b00cab351fe36432d7382076376a5ba2ccae1ab3383d84e2d72859340->leave($__internal_30a52a7b00cab351fe36432d7382076376a5ba2ccae1ab3383d84e2d72859340_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 59,  219 => 58,  212 => 53,  195 => 50,  191 => 49,  181 => 48,  178 => 47,  161 => 46,  145 => 32,  128 => 29,  124 => 28,  114 => 27,  111 => 26,  94 => 25,  77 => 10,  63 => 9,  59 => 8,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %} Accueil - {{ parent() }} {% endblock %}

{% block body %}
    
    <div class=\"col-xs-10 col-xs-offset-1 text-center\">
        <h1>{% image '@GeneralBundle/Resources/public/images/logo.png' %}
            <img src=\"{{ asset_url }}\" height=\"100px\"/>
        {% endimage %}<br />
        Bienvenue sur Quizz It</h1>
        <h6>Le site web de création de Quizz en tous genres !</h6>
        <hr />
        
        <div id='mostpop' class='col-xs-4'>
            <h3>Quizz les plus populaires</h3>
            
            <table class=\"table table-striped\">
                    <tr>
                        <th class=\"text-center\">Nom du Quizz</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\"><abbr title=\"(nombre d'utilisateurs ayant effectué le Quizz)\">Fait</abbr></th>
                    </tr>
                    
                    {% for quizz in quizzpop %}
                        <tr>
                            <td class=\"text-center\"><a href=\"{{path(\"quizz_preview\", { 'quizzid': quizz.quizz.id })}}\">{{ quizz.quizz.name }} {% if quizz.quizz.private == 1 %}<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>{% endif %}</a></td>
                            <td class=\"text-center\">{% include \"QuizzBundle:Template:rate.html.twig\" %}</td>
                            <td class=\"text-center\">{{ quizz.quizz.done }} fois</td>
                        </tr>
                    {% endfor %}
            </table>
            
        </div>
        
        <div id='newest' class='col-xs-4'>
            <h3>Quizz les plus récents</h3>
            
            <table class=\"table table-striped\">
                    <tr>
                        <th class=\"text-center\">Nom du Quizz</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\"><abbr title=\"(nombre d'utilisateurs ayant effectué le Quizz)\">Fait</abbr></th>
                    </tr>
                    
                    {% for quizz in quizznew %}
                        <tr>
                            <td class=\"text-center\"><a href=\"{{path(\"quizz_preview\", { 'quizzid': quizz.id })}}\">{{ quizz.name }} {% if quizz.private == 1 %}<i class=\"fa fa-lock icon\" aria-hidden=\"true\"></i>{% endif %}</a></td>
                            <td class=\"text-center\">{% include \"QuizzBundle:Template:rate.html.twig\" %}</td>
                            <td class=\"text-center\">{{ quizz.done }} fois</td>
                        </tr>
                    {% endfor %}
            </table>
        </div>
        
        <div id='leftmenu' class='col-xs-3 col-xs-offset-1'>
            <ul class=\"list-group text-center\">
                <li class=\"list-group-item\"><a href=\"{{path(\"search\")}}\">Rechercher un Quizz</a></li>
                <li class=\"list-group-item\"><a href=\"{{path('bytheme')}}\">Rechercher par thème</a></li>
            </ul>
        </div>

        
    </div>
    


{% endblock %}";
    }
}
