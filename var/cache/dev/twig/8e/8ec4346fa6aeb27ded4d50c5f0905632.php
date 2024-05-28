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

/* buscador/mostrar/subrazas.html.twig */
class __TwigTemplate_89814b33084d1f4b57d81eb05dda18f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/subrazas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/subrazas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/subrazas.html.twig", 1);
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
        echo "   <div class=\"grid-body\">
      <div class=\"L1\"></div>
      <div class=\"L2\"></div>
      <div class=\"DC\">
         <div class='grid-subclase'>
            <span class=\"V1\"> </span>
            <h1 class=\"N\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
            <span class=\"V2\"> </span>
            <div class=\"R\">
               <span><b>Ataque desarmado: </b>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 16, $this->source); })()), "AtaqueDesarmado", [], "any", false, false, false, 16), "html", null, true);
        echo "</span><br>
               ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 17, $this->source); })()), "Descripcion", [], "any", false, false, false, 17), "html", null, true);
        echo "
            </div>
            <div class=\"I\" ><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 19, $this->source); })()), "img", [], "any", false, false, false, 19), "html", null, true);
        echo "\"/></div>
         </div>
      </div>
      <div class=\"TP\">
            <h1>Estadísticas de raza</h1>
            <table class=\"Progreso\">
                <tr>
                    <th>Estadística</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Fuerza</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 31, $this->source); })()), "Fuerza", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Destreza</td>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 35, $this->source); })()), "Destreza", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Constitución</td>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 39, $this->source); })()), "Constitucion", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Inteligencia</td>
                    <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 43, $this->source); })()), "Inteligencia", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Sabiduría</td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 47, $this->source); })()), "Sabiduria", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Carisma</td>
                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subraza"]) || array_key_exists("subraza", $context) ? $context["subraza"] : (function () { throw new RuntimeError('Variable "subraza" does not exist.', 51, $this->source); })()), "Carisma", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                </tr>
            </table>
            </div>
        <div class=\"RC\">
            <h1>Rasgos de raza</h1>
            <div>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rasgos"]) || array_key_exists("rasgos", $context) ? $context["rasgos"] : (function () { throw new RuntimeError('Variable "rasgos" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 59
            echo "                    <div class=\"grid-rasgos\">
                        <span class=\"N\"><b>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 60), "html", null, true);
            echo "</b></span>
                        <span class=\"V1\"></span>
                        <span class=\"L\"><b><i>Nivel ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 62), "html", null, true);
            echo "</i></b></span>
                        <span class=\"D\">";
            // line 63
            $context["parraf"] = "";
            // line 64
            echo "                                        ";
            $context["buffer"] = 0;
            // line 65
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 65))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 66
                echo "                                            ";
                if (((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 66, $this->source); })()) > 0)) {
                    // line 67
                    echo "                                                ";
                    $context["buffer"] = ((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 67, $this->source); })()) - 1);
                    // line 68
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 68), $context["i"], 5) == "{|S|}")) {
                    // line 69
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 69, $this->source); })()), "
"]);
                    // line 70
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 71
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 71), $context["i"], 5) == "{|B|}")) {
                    // line 72
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 72, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 73
                    $context["parraf"] = "";
                    // line 74
                    echo "                                                <b>
                                                ";
                    // line 75
                    $context["buffer"] = 4;
                    // line 76
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 76), $context["i"], 5) == "{|I|}")) {
                    // line 77
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 77, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 78
                    $context["parraf"] = "";
                    // line 79
                    echo "                                                <i>
                                                ";
                    // line 80
                    $context["buffer"] = 4;
                    // line 81
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 81), $context["i"], 6) == "{|/B|}")) {
                    // line 82
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 82, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 83
                    $context["parraf"] = "";
                    // line 84
                    echo "                                                </b>
                                                ";
                    // line 85
                    $context["buffer"] = 5;
                    // line 86
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 86), $context["i"], 6) == "{|/I|}")) {
                    // line 87
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 87, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 88
                    $context["parraf"] = "";
                    // line 89
                    echo "                                                </i>
                                                ";
                    // line 90
                    $context["buffer"] = 5;
                    // line 91
                    echo "                                            ";
                } else {
                    // line 92
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 92, $this->source); })()), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 92), $context["i"], 1)]);
                    // line 93
                    echo "                                            ";
                }
                // line 94
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 95, $this->source); })()), "html", null, true));
            echo "
                        </span> 
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "            </div>
        </div>
         <div class=\"SU\">
         <h1>Raza principal</h1>
               <div class=\"listado\">
                  <a class=\"elemento\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_raza", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">
                     <img class=\"I\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 105, $this->source); })()), "img", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
                     <h2 class=\"N\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 106, $this->source); })()), "Nombre", [], "any", false, false, false, 106), "html", null, true);
        echo "</h2>
                     <span class=\"E\"></span>
                     <i class=\"S\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 108, $this->source); })()), "Descripcion", [], "any", false, false, false, 108), "html", null, true);
        echo "</i>
                     <i class=\"A\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 109, $this->source); })()), "Autor", [], "any", false, false, false, 109), "html", null, true);
        echo "</i>
                     <span class=\"C\"></span>
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
        return "buscador/mostrar/subrazas.html.twig";
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
        return array (  331 => 109,  327 => 108,  322 => 106,  318 => 105,  314 => 104,  307 => 99,  296 => 95,  290 => 94,  287 => 93,  284 => 92,  281 => 91,  279 => 90,  276 => 89,  274 => 88,  269 => 87,  266 => 86,  264 => 85,  261 => 84,  259 => 83,  254 => 82,  251 => 81,  249 => 80,  246 => 79,  244 => 78,  239 => 77,  236 => 76,  234 => 75,  231 => 74,  229 => 73,  224 => 72,  221 => 71,  218 => 70,  214 => 69,  211 => 68,  208 => 67,  205 => 66,  200 => 65,  197 => 64,  195 => 63,  191 => 62,  186 => 60,  183 => 59,  179 => 58,  169 => 51,  162 => 47,  155 => 43,  148 => 39,  141 => 35,  134 => 31,  119 => 19,  114 => 17,  110 => 16,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
            <h1 class=\"N\">{{subraza.nombre}}</h1>
            <span class=\"V2\"> </span>
            <div class=\"R\">
               <span><b>Ataque desarmado: </b>{{subraza.AtaqueDesarmado}}</span><br>
               {{subraza.Descripcion}}
            </div>
            <div class=\"I\" ><img src=\"{{subraza.img}}\"/></div>
         </div>
      </div>
      <div class=\"TP\">
            <h1>Estadísticas de raza</h1>
            <table class=\"Progreso\">
                <tr>
                    <th>Estadística</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Fuerza</td>
                    <td>{{subraza.Fuerza}}</td>
                </tr>
                <tr>
                    <td>Destreza</td>
                    <td>{{subraza.Destreza }}</td>
                </tr>
                <tr>
                    <td>Constitución</td>
                    <td>{{subraza.Constitucion }}</td>
                </tr>
                <tr>
                    <td>Inteligencia</td>
                    <td>{{subraza.Inteligencia }}</td>
                </tr>
                <tr>
                    <td>Sabiduría</td>
                    <td>{{subraza.Sabiduria }}</td>
                </tr>
                <tr>
                    <td>Carisma</td>
                    <td>{{subraza.Carisma }}</td>
                </tr>
            </table>
            </div>
        <div class=\"RC\">
            <h1>Rasgos de raza</h1>
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
         <h1>Raza principal</h1>
               <div class=\"listado\">
                  <a class=\"elemento\" href=\"{{ path( \"app_raza\", { \"id\": raza.id} ) }}\">
                     <img class=\"I\" src=\"{{raza.img}}\">
                     <h2 class=\"N\">{{ raza.Nombre }}</h2>
                     <span class=\"E\"></span>
                     <i class=\"S\">{{raza.Descripcion}}</i>
                     <i class=\"A\">{{raza.Autor}}</i>
                     <span class=\"C\"></span>
                  </a>
               </div>
      </div>


   </div>
    
{% endblock %}


", "buscador/mostrar/subrazas.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\mostrar\\subrazas.html.twig");
    }
}
