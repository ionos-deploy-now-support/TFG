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

/* buscador/mostrar/subclases.html.twig */
class __TwigTemplate_fec6471549fe47883455b78f89175398 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/subclases.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/subclases.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/subclases.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <div class=\"grid-body\">
      <div class=\"L1\"></div>
      <div class=\"L2\"></div>
      <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subclase"]) || array_key_exists("subclase", $context) ? $context["subclase"] : (function () { throw new RuntimeError('Variable "subclase" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\"><b>Requisitos: </b> <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subclase"]) || array_key_exists("subclase", $context) ? $context["subclase"] : (function () { throw new RuntimeError('Variable "subclase" does not exist.', 14, $this->source); })()), "Requisitos", [], "any", false, false, false, 14), "html", null, true);
        echo "</p></div>
                <div  class=\"I\" ><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subclase"]) || array_key_exists("subclase", $context) ? $context["subclase"] : (function () { throw new RuntimeError('Variable "subclase" does not exist.', 15, $this->source); })()), "img", [], "any", false, false, false, 15), "html", null, true);
        echo "\"/></div>
            </div>
        </div>
      <div class=\"TP\" >
            <h1>Tabla de Progresión</h1>
            <table class=\"Progreso\">
            <tr>
                <th>Nivel</th>
                <th>Competencia</th>
                <th>Mejoras</th>
                ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25) == 3)) {
            // line 26
            echo "                    <th>Despliegue Artístico</th>
                ";
        }
        // line 28
        echo "            </tr>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) || array_key_exists("tabla", $context) ? $context["tabla"] : (function () { throw new RuntimeError('Variable "tabla" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 0, [], "array", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 1, [], "array", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 2, [], "array", false, false, false, 33), "html", null, true);
            echo "</td>
                        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34) == 3)) {
                // line 35
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 3, [], "array", false, false, false, 35), "html", null, true);
                echo "</td>
                        ";
            }
            // line 37
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </table>
        </div>
      <div class=\"RC\">
            <h1>Rasgos de Subclase</h1>
            <div>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rasgos"]) || array_key_exists("rasgos", $context) ? $context["rasgos"] : (function () { throw new RuntimeError('Variable "rasgos" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 45
            echo "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 46), "html", null, true);
            echo "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 48), "html", null, true);
            echo "</i></b></span>
                        <span class=\"D\">";
            // line 49
            $context["parraf"] = "";
            // line 50
            echo "                                        ";
            $context["buffer"] = 0;
            // line 51
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 51))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
                echo "                                            ";
                if (((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 52, $this->source); })()) > 0)) {
                    // line 53
                    echo "                                                ";
                    $context["buffer"] = ((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 53, $this->source); })()) - 1);
                    // line 54
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 54), $context["i"], 5) == "{|S|}")) {
                    // line 55
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 55, $this->source); })()), "
"]);
                    // line 56
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 57
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 57), $context["i"], 5) == "{|B|}")) {
                    // line 58
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 58, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 59
                    $context["parraf"] = "";
                    // line 60
                    echo "                                                <b>
                                                ";
                    // line 61
                    $context["buffer"] = 4;
                    // line 62
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 62), $context["i"], 5) == "{|I|}")) {
                    // line 63
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 63, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 64
                    $context["parraf"] = "";
                    // line 65
                    echo "                                                <i>
                                                ";
                    // line 66
                    $context["buffer"] = 4;
                    // line 67
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 67), $context["i"], 6) == "{|/B|}")) {
                    // line 68
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 68, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 69
                    $context["parraf"] = "";
                    // line 70
                    echo "                                                </b>
                                                ";
                    // line 71
                    $context["buffer"] = 5;
                    // line 72
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 72), $context["i"], 6) == "{|/I|}")) {
                    // line 73
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 73, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 74
                    $context["parraf"] = "";
                    // line 75
                    echo "                                                </i>
                                                ";
                    // line 76
                    $context["buffer"] = 5;
                    // line 77
                    echo "                                            ";
                } else {
                    // line 78
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 78, $this->source); })()), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 78), $context["i"], 1)]);
                    // line 79
                    echo "                                            ";
                }
                // line 80
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                                        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 81, $this->source); })()), "html", null, true));
            echo "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "            </div>
        </div>
      <div class=\"SU\">
         <h1>Clase principal</h1>
                <div class=\"listado\">
                  <a class=\"elemento\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_clase", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\">
                     <img class=\"I\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 91, $this->source); })()), "img", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
                     <h2 class=\"N\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 92, $this->source); })()), "Nombre", [], "any", false, false, false, 92), "html", null, true);
        echo "</h2>
                     <span class=\"E\"></span>
                     <i class=\"C\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 94, $this->source); })()), "Competencias", [], "any", false, false, false, 94), "html", null, true);
        echo "</i>
                     <i class=\"A\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 95, $this->source); })()), "Autor", [], "any", false, false, false, 95), "html", null, true);
        echo "</i>
                     <span class=\"S\"><b>Salvaciones:</b> ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 96, $this->source); })()), "Salvaciones", [], "any", false, false, false, 96), "html", null, true);
        echo "</span>
                  </a>
                </div>
      </div>

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
        return "buscador/mostrar/subclases.html.twig";
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
        return array (  328 => 96,  324 => 95,  320 => 94,  315 => 92,  311 => 91,  307 => 90,  300 => 85,  289 => 81,  283 => 80,  280 => 79,  277 => 78,  274 => 77,  272 => 76,  269 => 75,  267 => 74,  262 => 73,  259 => 72,  257 => 71,  254 => 70,  252 => 69,  247 => 68,  244 => 67,  242 => 66,  239 => 65,  237 => 64,  232 => 63,  229 => 62,  227 => 61,  224 => 60,  222 => 59,  217 => 58,  214 => 57,  211 => 56,  207 => 55,  204 => 54,  201 => 53,  198 => 52,  193 => 51,  190 => 50,  188 => 49,  184 => 48,  179 => 46,  176 => 45,  172 => 44,  165 => 39,  158 => 37,  152 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  135 => 30,  131 => 29,  128 => 28,  124 => 26,  122 => 25,  109 => 15,  105 => 14,  100 => 12,  92 => 6,  82 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('styles/bodygrid.css') }}\">
{% endblock %}
{% block body %}
   <div class=\"grid-body\">
      <div class=\"L1\"></div>
      <div class=\"L2\"></div>
      <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">{{subclase.nombre}}</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\"><b>Requisitos: </b> <p>{{subclase.Requisitos}}</p></div>
                <div  class=\"I\" ><img src=\"{{subclase.img}}\"/></div>
            </div>
        </div>
      <div class=\"TP\" >
            <h1>Tabla de Progresión</h1>
            <table class=\"Progreso\">
            <tr>
                <th>Nivel</th>
                <th>Competencia</th>
                <th>Mejoras</th>
                {% if clase.id == 3 %}
                    <th>Despliegue Artístico</th>
                {% endif %}
            </tr>
                {% for linea in tabla %}
                    <tr>
                        <td>{{linea[0]}}</td>
                        <td>{{linea[1]}}</td>
                        <td>{{linea[2]}}</td>
                        {% if clase.id == 3 %}
                            <td>{{linea[3]}}</td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        </div>
      <div class=\"RC\">
            <h1>Rasgos de Subclase</h1>
            <div>
                {% for habilidad in rasgos %}
                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>{{habilidad.nombre}}</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel {{habilidad.OrigenNivel}}</i></b></span>
                        <span class=\"D\">{% set parraf = \"\"%}
                                        {% set buffer = 0 %}
                                        {% for i in 0.. habilidad.descripcion|length %}
                                            {% if buffer > 0 %}
                                                {% set buffer = buffer - 1 %}
                                            {% elseif habilidad.descripcion|slice(i,5) == \"{|S|}\" %}
                                                {% set parraf = [parraf,\"\\n\"]|join %}
                                                {% set buffer = 4 %}
                                            {% elseif habilidad.descripcion|slice(i,5) == \"{|B|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                <b>
                                                {% set buffer = 4 %}
                                            {% elseif habilidad.descripcion|slice(i,5) == \"{|I|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                <i>
                                                {% set buffer = 4 %}
                                            {% elseif habilidad.descripcion|slice(i,6) == \"{|/B|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                </b>
                                                {% set buffer = 5 %}
                                            {% elseif habilidad.descripcion|slice(i,6) == \"{|/I|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                </i>
                                                {% set buffer = 5 %}
                                            {% else %}
                                                {% set parraf = [parraf,habilidad.descripcion|slice(i,1)]|join %}
                                            {% endif %}
                                        {% endfor %}
                                        {{parraf|nl2br}}
                        </span> 
                    </div><br>
                {% endfor %}
            </div>
        </div>
      <div class=\"SU\">
         <h1>Clase principal</h1>
                <div class=\"listado\">
                  <a class=\"elemento\" href=\"{{ path( \"app_clase\", { \"id\": clase.id} ) }}\">
                     <img class=\"I\" src=\"{{clase.img}}\">
                     <h2 class=\"N\">{{ clase.Nombre }}</h2>
                     <span class=\"E\"></span>
                     <i class=\"C\">{{clase.Competencias}}</i>
                     <i class=\"A\">{{clase.Autor}}</i>
                     <span class=\"S\"><b>Salvaciones:</b> {{clase.Salvaciones}}</span>
                  </a>
                </div>
      </div>

   </div>
    
{% endblock %}


", "buscador/mostrar/subclases.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\mostrar\\subclases.html.twig");
    }
}
