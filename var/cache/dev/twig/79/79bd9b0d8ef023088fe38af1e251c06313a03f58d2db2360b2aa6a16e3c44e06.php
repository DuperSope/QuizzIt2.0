<?php

/* GeneralBundle:Template:theme.html.twig */
class __TwigTemplate_9b53053f8c32db026fa5c91c702e7650298fbfa6f44e85ad1e259a8e44b44687 extends Twig_Template
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
        $__internal_0f4b314bb2b03f2d8ade0518ed564c57b26f793af085b34d7c9f9f3d5c17fd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4b314bb2b03f2d8ade0518ed564c57b26f793af085b34d7c9f9f3d5c17fd81->enter($__internal_0f4b314bb2b03f2d8ade0518ed564c57b26f793af085b34d7c9f9f3d5c17fd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GeneralBundle:Template:theme.html.twig"));

        // line 1
        echo "<div class=\"col-xs-8\">
    <div class=\"tabbable tabs-left \">
            <ul id=\"ul\" class=\"nav nav-tabs\">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 5
            echo "                    <li class=\"theme\" i=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "\">
                        <a href=\"#";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</a>
                        ";
            // line 7
            if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                echo "<btn class=\"btn btn-warning\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_updatetheme", array("themeid" => $this->getAttribute($context["theme"], "id", array()))), "html", null, true);
                echo "\" class=\"no-deco\">Modifier</a></btn>";
            }
            // line 8
            echo "                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "                ";
        if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
            echo "<li id=\"addbtn\" parent=\"\" level=\"0\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>";
        }
        // line 11
        echo "            </ul>
            
        </div>

        <div class=\"tab-content\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : $this->getContext($context, "themes")));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 17
            echo "
                <div class=\"tab-pane\" id=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"tabbable tabs-left\">
                        <ul id=\"ul";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
            echo "\" class=\"nav nav-tabs\">
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme"], "child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme1"]) {
                // line 22
                echo "                                <li class=\"theme\" i=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "id", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "name", array()), "html", null, true);
                echo "\"><a href=\"#";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "name", array()), "html", null, true);
                echo "</a>
                                    ";
                // line 23
                if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                    echo "<btn class=\"btn btn-warning\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_updatetheme", array("themeid" => $this->getAttribute($context["theme1"], "id", array()))), "html", null, true);
                    echo "\" class=\"no-deco\">Modifier</a></btn>";
                }
                // line 24
                echo "                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                            ";
            if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                echo "<li id=\"addbtn";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
                echo "\" parent=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "id", array()), "html", null, true);
                echo "\" level=\"1\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>";
            }
            // line 27
            echo "                        </ul>
                    </div>

                   <div class=\"tab-content\">

                       ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme"], "child", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["theme1"]) {
                // line 33
                echo "
                            <div class=\"tab-pane\" id=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "id", array()), "html", null, true);
                echo "\">
                                <div class=\"tabbable tabs-left\">
                                    <ul id=\"ul";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "id", array()), "html", null, true);
                echo "\" class=\"nav nav-tabs\">
                                        ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme1"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["theme2"]) {
                    // line 38
                    echo "                                            <li class=\"theme\"i=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "id", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "name", array()), "html", null, true);
                    echo "\"><a href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "id", array()), "html", null, true);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "name", array()), "html", null, true);
                    echo "</a>
                                                ";
                    // line 39
                    if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                        echo "<btn class=\"btn btn-warning\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_updatetheme", array("themeid" => $this->getAttribute($context["theme2"], "id", array()))), "html", null, true);
                        echo "\" class=\"no-deco\">Modifier</a></btn>";
                    }
                    // line 40
                    echo "                                            </li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                                        ";
                if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                    echo "<li id=\"addbtn";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "id", array()), "html", null, true);
                    echo "\" parent=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme1"], "id", array()), "html", null, true);
                    echo "\" level=\"2\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>";
                }
                // line 43
                echo "                                    </ul>
                                </div>

                               <div class=\"tab-content\">
                                   ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme1"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["theme2"]) {
                    // line 48
                    echo "
                                        <div class=\"tab-pane\" id=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "id", array()), "html", null, true);
                    echo "\">
                                            <div class=\"tabbable tabs-left\">
                                                <ul id=\"ul";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "id", array()), "html", null, true);
                    echo "\" class=\"nav nav-tabs\">
                                                    ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["theme2"], "child", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["theme3"]) {
                        // line 53
                        echo "                                                        <li class=\"theme\" i=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["theme3"], "id", array()), "html", null, true);
                        echo "\" name=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["theme3"], "name", array()), "html", null, true);
                        echo "\"><a href=\"#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["theme3"], "id", array()), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["theme3"], "name", array()), "html", null, true);
                        echo "</a>
                                                            ";
                        // line 54
                        if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                            echo "<btn class=\"btn btn-warning\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_updatetheme", array("themeid" => $this->getAttribute($context["theme3"], "id", array()))), "html", null, true);
                            echo "\" class=\"no-deco\">Modifier</a></btn>";
                        }
                        // line 55
                        echo "                                                        </li>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "                                                    ";
                    if (((isset($context["theme_admin"]) ? $context["theme_admin"] : $this->getContext($context, "theme_admin")) == 1)) {
                        echo "<li id=\"addbtn";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "id", array()), "html", null, true);
                        echo "\" parent=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["theme2"], "id", array()), "html", null, true);
                        echo "\" level=\"2\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>";
                    }
                    // line 58
                    echo "                                                </ul>
                                            </div>

                                           <div class=\"tab-content col-xs-10\">

                                           </div>
                                        </div>

                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                               </div>
                            </div>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "
                   </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </div>
        
</div>";
        
        $__internal_0f4b314bb2b03f2d8ade0518ed564c57b26f793af085b34d7c9f9f3d5c17fd81->leave($__internal_0f4b314bb2b03f2d8ade0518ed564c57b26f793af085b34d7c9f9f3d5c17fd81_prof);

    }

    public function getTemplateName()
    {
        return "GeneralBundle:Template:theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 76,  264 => 71,  255 => 67,  241 => 58,  232 => 57,  225 => 55,  219 => 54,  208 => 53,  204 => 52,  200 => 51,  195 => 49,  192 => 48,  188 => 47,  182 => 43,  173 => 42,  166 => 40,  160 => 39,  149 => 38,  145 => 37,  141 => 36,  136 => 34,  133 => 33,  129 => 32,  122 => 27,  113 => 26,  106 => 24,  100 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 18,  73 => 17,  69 => 16,  62 => 11,  57 => 10,  50 => 8,  44 => 7,  38 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-xs-8\">
    <div class=\"tabbable tabs-left \">
            <ul id=\"ul\" class=\"nav nav-tabs\">
                {% for theme in themes %}
                    <li class=\"theme\" i=\"{{theme.id}}\" name=\"{{ theme.name }}\">
                        <a href=\"#{{theme.id}}\" data-toggle=\"tab\">{{ theme.name }}</a>
                        {% if(theme_admin == 1)%}<btn class=\"btn btn-warning\"><a href=\"{{path(\"admin_updatetheme\", { 'themeid': theme.id })}}\" class=\"no-deco\">Modifier</a></btn>{% endif %}
                    </li>
                {% endfor %}
                {% if(theme_admin == 1)%}<li id=\"addbtn\" parent=\"\" level=\"0\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>{% endif %}
            </ul>
            
        </div>

        <div class=\"tab-content\">
            {% for theme in themes %}

                <div class=\"tab-pane\" id=\"{{theme.id}}\">
                    <div class=\"tabbable tabs-left\">
                        <ul id=\"ul{{theme.id}}\" class=\"nav nav-tabs\">
                            {% for theme1 in theme.child %}
                                <li class=\"theme\" i=\"{{theme1.id}}\" name=\"{{ theme1.name }}\"><a href=\"#{{theme1.id}}\" data-toggle=\"tab\">{{ theme1.name }}</a>
                                    {% if(theme_admin == 1)%}<btn class=\"btn btn-warning\"><a href=\"{{path(\"admin_updatetheme\", { 'themeid': theme1.id })}}\" class=\"no-deco\">Modifier</a></btn>{% endif %}
                                </li>
                            {% endfor %}
                            {% if(theme_admin == 1)%}<li id=\"addbtn{{theme.id}}\" parent=\"{{theme.id}}\" level=\"1\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>{% endif %}
                        </ul>
                    </div>

                   <div class=\"tab-content\">

                       {% for theme1 in theme.child %}

                            <div class=\"tab-pane\" id=\"{{theme1.id}}\">
                                <div class=\"tabbable tabs-left\">
                                    <ul id=\"ul{{theme1.id}}\" class=\"nav nav-tabs\">
                                        {% for theme2 in theme1.child %}
                                            <li class=\"theme\"i=\"{{theme2.id}}\" name=\"{{ theme2.name }}\"><a href=\"#{{theme2.id}}\" data-toggle=\"tab\">{{ theme2.name }}</a>
                                                {% if(theme_admin == 1)%}<btn class=\"btn btn-warning\"><a href=\"{{path(\"admin_updatetheme\", { 'themeid': theme2.id })}}\" class=\"no-deco\">Modifier</a></btn>{% endif %}
                                            </li>
                                        {% endfor %}
                                        {% if(theme_admin == 1)%}<li id=\"addbtn{{theme1.id}}\" parent=\"{{theme1.id}}\" level=\"2\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>{% endif %}
                                    </ul>
                                </div>

                               <div class=\"tab-content\">
                                   {% for theme2 in theme1.child %}

                                        <div class=\"tab-pane\" id=\"{{theme2.id}}\">
                                            <div class=\"tabbable tabs-left\">
                                                <ul id=\"ul{{theme2.id}}\" class=\"nav nav-tabs\">
                                                    {% for theme3 in theme2.child %}
                                                        <li class=\"theme\" i=\"{{theme3.id}}\" name=\"{{ theme3.name }}\"><a href=\"#{{theme3.id}}\" data-toggle=\"tab\">{{ theme3.name }}</a>
                                                            {% if(theme_admin == 1)%}<btn class=\"btn btn-warning\"><a href=\"{{path(\"admin_updatetheme\", { 'themeid': theme3.id })}}\" class=\"no-deco\">Modifier</a></btn>{% endif %}
                                                        </li>
                                                    {% endfor %}
                                                    {% if(theme_admin == 1) %}<li id=\"addbtn{{theme2.id}}\" parent=\"{{theme2.id}}\" level=\"2\" class=\"btn btn-primary addtheme\" onClick=\"addTheme(this)\">Ajouter</li>{% endif %}
                                                </ul>
                                            </div>

                                           <div class=\"tab-content col-xs-10\">

                                           </div>
                                        </div>

                                    {% endfor %}
                               </div>
                            </div>

                        {% endfor %}

                   </div>
                </div>

            {% endfor %}
        </div>
        
</div>";
    }
}
