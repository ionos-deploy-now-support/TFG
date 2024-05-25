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

/* buscador/mostrar/clases.html.twig */
class __TwigTemplate_d6f0c3f270d9e0b6c7eb59beb9efb1ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/clases.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/clases.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/clases.html.twig", 1);
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
                <span class=\"V2\"> </span>
                <div class=\"H\"><b>Habilidades: </b> <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 15, $this->source); })()), "HabilidadesAElegir", [], "any", false, false, false, 15), "html", null, true);
        echo "</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 16, $this->source); })()), "Competencias", [], "any", false, false, false, 16), "html", null, true);
        echo "</p></div>
                <div class=\"E\"><b>Equipo inicial: </b> <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 17, $this->source); })()), "Equipamiento", [], "any", false, false, false, 17), "html", null, true);
        echo "</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 18, $this->source); })()), "PuntosDeGolpe", [], "any", false, false, false, 18), "html", null, true);
        echo "</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 19, $this->source); })()), "Salvaciones", [], "any", false, false, false, 19), "html", null, true);
        echo "</p></div>
                <div class=\"R\"><b>Requisitos: </b> <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 20, $this->source); })()), "Requisitos", [], "any", false, false, false, 20), "html", null, true);
        echo "</p></div>
                <span class=\"espacio\"></span>
                <div  class=\"I\" ><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 22, $this->source); })()), "img", [], "any", false, false, false, 22), "html", null, true);
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
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32) == 3)) {
            // line 33
            echo "                    <th>Despliegue Artístico</th>
                ";
        }
        // line 35
        echo "            </tr>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabla"]) || array_key_exists("tabla", $context) ? $context["tabla"] : (function () { throw new RuntimeError('Variable "tabla" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 0, [], "array", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 1, [], "array", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 2, [], "array", false, false, false, 40), "html", null, true);
            echo "</td>
                        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41) == 3)) {
                // line 42
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea"], 3, [], "array", false, false, false, 42), "html", null, true);
                echo "</td>
                        ";
            }
            // line 44
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de Clase</h1>
            <div>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rasgos"]) || array_key_exists("rasgos", $context) ? $context["rasgos"] : (function () { throw new RuntimeError('Variable "rasgos" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 52
            echo "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 53), "html", null, true);
            echo "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 55), "html", null, true);
            echo "</i></b></span>
                        <span class=\"D\">";
            // line 56
            $context["parraf"] = "";
            // line 57
            echo "                                        ";
            $context["buffer"] = 0;
            // line 58
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 58))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "                                            ";
                if (((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 59, $this->source); })()) > 0)) {
                    // line 60
                    echo "                                                ";
                    $context["buffer"] = ((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 60, $this->source); })()) - 1);
                    // line 61
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 61), $context["i"], 5) == "{|S|}")) {
                    // line 62
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 62, $this->source); })()), "
"]);
                    // line 63
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 64
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 64), $context["i"], 5) == "{|B|}")) {
                    // line 65
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 65, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 66
                    $context["parraf"] = "";
                    // line 67
                    echo "                                                <b>
                                                ";
                    // line 68
                    $context["buffer"] = 4;
                    // line 69
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 69), $context["i"], 5) == "{|I|}")) {
                    // line 70
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 70, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 71
                    $context["parraf"] = "";
                    // line 72
                    echo "                                                <i>
                                                ";
                    // line 73
                    $context["buffer"] = 4;
                    // line 74
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 74), $context["i"], 6) == "{|/B|}")) {
                    // line 75
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 75, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 76
                    $context["parraf"] = "";
                    // line 77
                    echo "                                                </b>
                                                ";
                    // line 78
                    $context["buffer"] = 5;
                    // line 79
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 79), $context["i"], 6) == "{|/I|}")) {
                    // line 80
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 80, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 81
                    $context["parraf"] = "";
                    // line 82
                    echo "                                                </i>
                                                ";
                    // line 83
                    $context["buffer"] = 5;
                    // line 84
                    echo "                                            ";
                } else {
                    // line 85
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 85, $this->source); })()), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 85), $context["i"], 1)]);
                    // line 86
                    echo "                                            ";
                }
                // line 87
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 88, $this->source); })()), "html", null, true));
            echo "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </div>
        </div>
        <div class=\"SU\">
            <h1>Subclases</h1>
                <div class=\"listado\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subclases"]) || array_key_exists("subclases", $context) ? $context["subclases"] : (function () { throw new RuntimeError('Variable "subclases" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subclase"]) {
            // line 98
            echo "                        <a class=\"elemento\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subclase", ["id" => twig_get_attribute($this->env, $this->source, $context["subclase"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">
                            <img class=\"I\" src=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subclase"], "img", [], "any", false, false, false, 99), "html", null, true);
            echo "\">
                            <h2 class=\"N\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subclase"], "Nombre", [], "any", false, false, false, 100), "html", null, true);
            echo "</h2>
                            <span class=\"E\"></span>
                            <span class=\"S\"><b>Requisitos:</b> ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subclase"], "Requisitos", [], "any", false, false, false, 102), "html", null, true);
            echo "</span>
                            <i class=\"A\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subclase"], "Autor", [], "any", false, false, false, 103), "html", null, true);
            echo "</i>
                            <span class=\"C\"></span>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                </div>
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
        return "buscador/mostrar/clases.html.twig";
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
        return array (  364 => 107,  354 => 103,  350 => 102,  345 => 100,  341 => 99,  336 => 98,  332 => 97,  325 => 92,  314 => 88,  308 => 87,  305 => 86,  302 => 85,  299 => 84,  297 => 83,  294 => 82,  292 => 81,  287 => 80,  284 => 79,  282 => 78,  279 => 77,  277 => 76,  272 => 75,  269 => 74,  267 => 73,  264 => 72,  262 => 71,  257 => 70,  254 => 69,  252 => 68,  249 => 67,  247 => 66,  242 => 65,  239 => 64,  236 => 63,  232 => 62,  229 => 61,  226 => 60,  223 => 59,  218 => 58,  215 => 57,  213 => 56,  209 => 55,  204 => 53,  201 => 52,  197 => 51,  190 => 46,  183 => 44,  177 => 42,  175 => 41,  171 => 40,  167 => 39,  163 => 38,  160 => 37,  156 => 36,  153 => 35,  149 => 33,  147 => 32,  134 => 22,  129 => 20,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  109 => 15,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                <span class=\"V2\"> </span>
                <div class=\"H\"><b>Habilidades: </b> <p>{{clase.HabilidadesAElegir}}</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>{{clase.Competencias}}</p></div>
                <div class=\"E\"><b>Equipo inicial: </b> <p>{{clase.Equipamiento}}</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>{{clase.PuntosDeGolpe}}</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>{{clase.Salvaciones}}</p></div>
                <div class=\"R\"><b>Requisitos: </b> <p>{{clase.Requisitos}}</p></div>
                <span class=\"espacio\"></span>
                <div  class=\"I\" ><img src=\"{{clase.img}}\"/></div>
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
            <h1>Rasgos de Clase</h1>
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
            <h1>Subclases</h1>
                <div class=\"listado\">
                    {% for subclase in subclases %}
                        <a class=\"elemento\" href=\"{{ path( \"app_subclase\", { \"id\": subclase.id} ) }}\">
                            <img class=\"I\" src=\"{{subclase.img}}\">
                            <h2 class=\"N\">{{ subclase.Nombre }}</h2>
                            <span class=\"E\"></span>
                            <span class=\"S\"><b>Requisitos:</b> {{subclase.Requisitos}}</span>
                            <i class=\"A\">{{subclase.Autor}}</i>
                            <span class=\"C\"></span>
                        </a>
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
                        {{parraf|nl2br}} #}", "buscador/mostrar/clases.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\mostrar\\clases.html.twig");
    }
}
