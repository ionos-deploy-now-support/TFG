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

/* buscador/mostrar/trasfondos.html.twig */
class __TwigTemplate_0ec6a7e35a0fe592af228ce0ec4dd485 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/trasfondos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/trasfondos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/trasfondos.html.twig", 1);
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
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 15, $this->source); })()), "Plano", [], "any", false, false, false, 15) != null)) {
            echo "<h3>Plano: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 15, $this->source); })()), "Plano", [], "any", false, false, false, 15), "html", null, true);
            echo "</h3>";
        }
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 15, $this->source); })()), "Descripcion", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 16, $this->source); })()), "img", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Competencias y objetos iniciales</h1>
            <table class=\"Progreso\">
                ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 22, $this->source); })()), "Idiomas", [], "any", false, false, false, 22) != null)) {
            // line 23
            echo "                <tr>
                    <td><b>Idiomas</b></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 25, $this->source); })()), "Idiomas", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 28
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 28, $this->source); })()), "Competencias", [], "any", false, false, false, 28) != null)) {
            // line 29
            echo "                <tr>
                    <td><b>Competencias</b></td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 31, $this->source); })()), "Competencias", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 34
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 34, $this->source); })()), "ObjetosIniciales", [], "any", false, false, false, 34) != null)) {
            // line 35
            echo "                <tr>
                    <td><b>Objetos Iniciales</b></td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trasfondo"]) || array_key_exists("trasfondo", $context) ? $context["trasfondo"] : (function () { throw new RuntimeError('Variable "trasfondo" does not exist.', 37, $this->source); })()), "ObjetosIniciales", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 40
        echo "            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de trasfondo</h1>
            <div>
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rasgos"]) || array_key_exists("rasgos", $context) ? $context["rasgos"] : (function () { throw new RuntimeError('Variable "rasgos" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 46
            echo "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 47), "html", null, true);
            echo "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 49), "html", null, true);
            echo "</i></b></span>
                        <span class=\"D\">";
            // line 50
            $context["parraf"] = "";
            // line 51
            echo "                                        ";
            $context["buffer"] = 0;
            // line 52
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 52))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                echo "                                            ";
                if (((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 53, $this->source); })()) > 0)) {
                    // line 54
                    echo "                                                ";
                    $context["buffer"] = ((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 54, $this->source); })()) - 1);
                    // line 55
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 55), $context["i"], 5) == "{|S|}")) {
                    // line 56
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 56, $this->source); })()), "
"]);
                    // line 57
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 58
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 58), $context["i"], 5) == "{|B|}")) {
                    // line 59
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 59, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 60
                    $context["parraf"] = "";
                    // line 61
                    echo "                                                <b>
                                                ";
                    // line 62
                    $context["buffer"] = 4;
                    // line 63
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 63), $context["i"], 5) == "{|I|}")) {
                    // line 64
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 64, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 65
                    $context["parraf"] = "";
                    // line 66
                    echo "                                                <i>
                                                ";
                    // line 67
                    $context["buffer"] = 4;
                    // line 68
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 68), $context["i"], 6) == "{|/B|}")) {
                    // line 69
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 69, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 70
                    $context["parraf"] = "";
                    // line 71
                    echo "                                                </b>
                                                ";
                    // line 72
                    $context["buffer"] = 5;
                    // line 73
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 73), $context["i"], 6) == "{|/I|}")) {
                    // line 74
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 74, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 75
                    $context["parraf"] = "";
                    // line 76
                    echo "                                                </i>
                                                ";
                    // line 77
                    $context["buffer"] = 5;
                    // line 78
                    echo "                                            ";
                } else {
                    // line 79
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 79, $this->source); })()), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 79), $context["i"], 1)]);
                    // line 80
                    echo "                                            ";
                }
                // line 81
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                                        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 82, $this->source); })()), "html", null, true));
            echo "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>
        </div>
        <div class=\"SU\"></div>
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
        return "buscador/mostrar/trasfondos.html.twig";
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
        return array (  301 => 86,  290 => 82,  284 => 81,  281 => 80,  278 => 79,  275 => 78,  273 => 77,  270 => 76,  268 => 75,  263 => 74,  260 => 73,  258 => 72,  255 => 71,  253 => 70,  248 => 69,  245 => 68,  243 => 67,  240 => 66,  238 => 65,  233 => 64,  230 => 63,  228 => 62,  225 => 61,  223 => 60,  218 => 59,  215 => 58,  212 => 57,  208 => 56,  205 => 55,  202 => 54,  199 => 53,  194 => 52,  191 => 51,  189 => 50,  185 => 49,  180 => 47,  177 => 46,  173 => 45,  166 => 40,  160 => 37,  156 => 35,  153 => 34,  147 => 31,  143 => 29,  140 => 28,  134 => 25,  130 => 23,  128 => 22,  119 => 16,  109 => 15,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">{{trasfondo.nombre}}</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">{% if trasfondo.Plano != null %}<h3>Plano: {{trasfondo.Plano}}</h3>{% endif %}<br>{{trasfondo.Descripcion}}</div>
                <div class=\"I\" ><img src=\"{{trasfondo.img}}\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Competencias y objetos iniciales</h1>
            <table class=\"Progreso\">
                {% if trasfondo.Idiomas != null %}
                <tr>
                    <td><b>Idiomas</b></td>
                    <td>{{trasfondo.Idiomas}}</td>
                </tr>
                {% endif %}
                {% if trasfondo.Competencias != null %}
                <tr>
                    <td><b>Competencias</b></td>
                    <td>{{trasfondo.Competencias}}</td>
                </tr>
                {% endif %}
                {% if trasfondo.ObjetosIniciales != null %}
                <tr>
                    <td><b>Objetos Iniciales</b></td>
                    <td>{{trasfondo.ObjetosIniciales}}</td>
                </tr>
                {% endif %}
            </table>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de trasfondo</h1>
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
        <div class=\"SU\"></div>
    </div>





   
    
    
    
{% endblock %}


", "buscador/mostrar/trasfondos.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\mostrar\\trasfondos.html.twig");
    }
}
