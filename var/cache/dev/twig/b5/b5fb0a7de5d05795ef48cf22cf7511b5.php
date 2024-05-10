<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* buscador/claseok.html.twig */
class __TwigTemplate_76a452650e981d68286543e205c22b52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/claseok.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/claseok.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/claseok.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        
        <div class=\"DC\">
            <div class='grid-clase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                
                 <div class=\"H\"><b>Habilidades: </b> <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 15, $this->source); })()), "HabilidadesAElegir", [], "any", false, false, false, 15), "html", null, true);
        echo "</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 16, $this->source); })()), "Competencias", [], "any", false, false, false, 16), "html", null, true);
        echo "</p></div>
                
               
                <div class=\"E\"> <b >Equipo: </b> <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 19, $this->source); })()), "Equipamiento", [], "any", false, false, false, 19), "html", null, true);
        echo "</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 20, $this->source); })()), "PuntosDeGolpe", [], "any", false, false, false, 20), "html", null, true);
        echo "</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 21, $this->source); })()), "Salvaciones", [], "any", false, false, false, 21), "html", null, true);
        echo "</p></div>
                <div class=\"R\"><b >Requisitos: </b> <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 22, $this->source); })()), "Requisitos", [], "any", false, false, false, 22), "html", null, true);
        echo "</p></div>
                <div  class=\"I\" ><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 23, $this->source); })()), "img", [], "any", false, false, false, 23), "html", null, true);
        echo "\"/></div>
                <span class=\"V2\"></span>
            </div>
        </div>
        <div class=\"TP\" >
            <h1>Tabla de Progresión</h1>
            <table class=\"Progreso\">
            <tr>
                <th>Nivel</th>
                <th>Competencia</th>
                <th>Mejoras</th>
            </tr>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) || array_key_exists("tabla", $context) ? $context["tabla"] : (function () { throw new RuntimeError('Variable "tabla" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 36
            echo "                    <tr>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 0, [], "array", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 1, [], "array", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 2, [], "array", false, false, false, 39), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de Clase</h1>
            <div>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rasgos"]) || array_key_exists("rasgos", $context) ? $context["rasgos"] : (function () { throw new RuntimeError('Variable "rasgos" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 48
            echo "                    <div class=\"grid-rasgos\">
                        <span class=\"N\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
                        <span class=\"V1\"></span>
                        <span class=\"L\">Nivel ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 51), "html", null, true);
            echo "</span>
                        <span class=\"D\">";
            // line 52
            $context["parraf"] = "";
            // line 53
            echo "                                        ";
            $context["buffer"] = 0;
            // line 54
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "Descripción", [], "any", false, false, false, 54))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "                                            ";
                if (((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 55, $this->source); })()) > 0)) {
                    // line 56
                    echo "                                                ";
                    $context["buffer"] = ((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 56, $this->source); })()) - 1);
                    // line 57
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "Descripción", [], "any", false, false, false, 57), $context["i"], 5) == "{|S|}")) {
                    // line 58
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 58, $this->source); })()), "
"]);
                    // line 59
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 60
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "Descripción", [], "any", false, false, false, 60), $context["i"], 5) == "{|B|}")) {
                    // line 61
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 61, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 62
                    $context["parraf"] = "";
                    // line 63
                    echo "                                                <b>
                                                ";
                    // line 64
                    $context["buffer"] = 4;
                    // line 65
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "Descripción", [], "any", false, false, false, 65), $context["i"], 6) == "{|/B|}")) {
                    // line 66
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 66, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 67
                    $context["parraf"] = "";
                    // line 68
                    echo "                                                </b>
                                                ";
                    // line 69
                    $context["buffer"] = 5;
                    // line 70
                    echo "                                            ";
                } else {
                    // line 71
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 71, $this->source); })()), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "Descripción", [], "any", false, false, false, 71), $context["i"], 1)]);
                    // line 72
                    echo "                                            ";
                }
                // line 73
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                                        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 74, $this->source); })()), "html", null, true));
            echo "
                        </span> 

                        

                         
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            </div>
        </div>
        <div class=\"L2\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/claseok.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  283 => 82,  268 => 74,  262 => 73,  259 => 72,  256 => 71,  253 => 70,  251 => 69,  248 => 68,  246 => 67,  241 => 66,  238 => 65,  236 => 64,  233 => 63,  231 => 62,  226 => 61,  223 => 60,  220 => 59,  216 => 58,  213 => 57,  210 => 56,  207 => 55,  202 => 54,  199 => 53,  197 => 52,  193 => 51,  188 => 49,  185 => 48,  181 => 47,  174 => 42,  165 => 39,  161 => 38,  157 => 37,  154 => 36,  150 => 35,  135 => 23,  131 => 22,  127 => 21,  123 => 20,  119 => 19,  113 => 16,  109 => 15,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/bodygrid.css') }}\">
{% endblock %}
{% block body %}
    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        
        <div class=\"DC\">
            <div class='grid-clase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">{{clase.nombre}}</h1>
                
                 <div class=\"H\"><b>Habilidades: </b> <p>{{clase.HabilidadesAElegir}}</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>{{clase.Competencias}}</p></div>
                
               
                <div class=\"E\"> <b >Equipo: </b> <p>{{clase.Equipamiento}}</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>{{clase.PuntosDeGolpe}}</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>{{clase.Salvaciones}}</p></div>
                <div class=\"R\"><b >Requisitos: </b> <p>{{clase.Requisitos}}</p></div>
                <div  class=\"I\" ><img src=\"{{clase.img}}\"/></div>
                <span class=\"V2\"></span>
            </div>
        </div>
        <div class=\"TP\" >
            <h1>Tabla de Progresión</h1>
            <table class=\"Progreso\">
            <tr>
                <th>Nivel</th>
                <th>Competencia</th>
                <th>Mejoras</th>
            </tr>
                {% for linea in tabla %}
                    <tr>
                        <td>{{linea[0]}}</td>
                        <td>{{linea[1]}}</td>
                        <td>{{linea[2]}}</td>
                    </tr>
                {% endfor %}
            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de Clase</h1>
            <div>
                {% for habilidad in rasgos %}
                    <div class=\"grid-rasgos\">
                        <span class=\"N\">{{habilidad.nombre}}</span>
                        <span class=\"V1\"></span>
                        <span class=\"L\">Nivel {{habilidad.OrigenNivel}}</span>
                        <span class=\"D\">{% set parraf = \"\"%}
                                        {% set buffer = 0 %}
                                        {% for i in 0.. habilidad.Descripción|length %}
                                            {% if buffer > 0 %}
                                                {% set buffer = buffer - 1 %}
                                            {% elseif habilidad.Descripción|slice(i,5) == \"{|S|}\" %}
                                                {% set parraf = [parraf,\"\\n\"]|join %}
                                                {% set buffer = 4 %}
                                            {% elseif habilidad.Descripción|slice(i,5) == \"{|B|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                <b>
                                                {% set buffer = 4 %}
                                            {% elseif habilidad.Descripción|slice(i,6) == \"{|/B|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                </b>
                                                {% set buffer = 5 %}
                                            {% else %}
                                                {% set parraf = [parraf,habilidad.Descripción|slice(i,1)]|join %}
                                            {% endif %}
                                        {% endfor %}
                                        {{parraf|nl2br}}
                        </span> 

                        

                         
                    </div><br>
                {% endfor %}
            </div>
        </div>
        <div class=\"L2\"></div>
    </div>
{% endblock %}


{# Función para ejecutar comandos
{% set parraf = \"\"%}
{% set buffer = 0 %}
{% for i in 0.. habilidad.Descripción|length %}
                            {% if buffer > 0 %}
                                {% set buffer = buffer - 1 %}
                            {% elseif habilidad.Descripción|slice(i,5) == \"{|S|}\" %}
                                {% set parraf = [parraf,\"\\n\"]|join %}
                                {% set buffer = 4 %}
                            {% elseif habilidad.Descripción|slice(i,5) == \"{|B|}\" %}
                                {{parraf|nl2br}}
                                {% set parraf = \"\"%}
                                <b>
                                {% set buffer = 4 %}
                            {% elseif habilidad.Descripción|slice(i,6) == \"{|/B|}\" %}
                                {{parraf|nl2br}}
                                {% set parraf = \"\"%}
                                </b>
                                {% set buffer = 5 %}
                            {% else %}
                                {% set parraf = [parraf,habilidad.Descripción|slice(i,1)]|join %}
                            {% endif %}
                        {% endfor %}
                        {{parraf|nl2br}} #}", "buscador/claseok.html.twig", "/opt/TFG/templates/buscador/claseok.html.twig");
    }
}
