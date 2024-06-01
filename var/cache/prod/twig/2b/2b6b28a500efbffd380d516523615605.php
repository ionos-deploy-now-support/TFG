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
class __TwigTemplate_848a7921e35aebd760f2bad0a4745a3f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/clases.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        
        <div class=\"DC\">
            <div class='grid-clase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"H\"><b>Habilidades: </b> <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "HabilidadesAElegir", [], "any", false, false, false, 15), "html", null, true);
        echo "</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Competencias", [], "any", false, false, false, 16), "html", null, true);
        echo "</p></div>
                <div class=\"E\"><b>Equipo inicial: </b> <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Equipamiento", [], "any", false, false, false, 17), "html", null, true);
        echo "</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "PuntosDeGolpe", [], "any", false, false, false, 18), "html", null, true);
        echo "</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Salvaciones", [], "any", false, false, false, 19), "html", null, true);
        echo "</p></div>
                <div class=\"R\"><b>Requisitos: </b> <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Requisitos", [], "any", false, false, false, 20), "html", null, true);
        echo "</p></div>
                <span class=\"espacio\"></span>
                <div  class=\"I\" ><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "img", [], "any", false, false, false, 22), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 32) == 3)) {
            // line 33
            echo "                    <th>Despliegue Artístico</th>
                ";
        }
        // line 35
        echo "            </tr>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabla"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["linea"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["linea"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["linea"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), "html", null, true);
            echo "</td>
                        ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 41) == 3)) {
                // line 42
                echo "                            <td>";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["linea"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[3] ?? null) : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["rasgos"] ?? null));
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
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 60
                    echo "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 61
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 61), $context["i"], 5) == "{|S|}")) {
                    // line 62
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), "
"]);
                    // line 63
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 64
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 64), $context["i"], 5) == "{|B|}")) {
                    // line 65
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 85), $context["i"], 1)]);
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
            echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
        $context['_seq'] = twig_ensure_traversable(($context["subclases"] ?? null));
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
        return array (  334 => 107,  324 => 103,  320 => 102,  315 => 100,  311 => 99,  306 => 98,  302 => 97,  295 => 92,  284 => 88,  278 => 87,  275 => 86,  272 => 85,  269 => 84,  267 => 83,  264 => 82,  262 => 81,  257 => 80,  254 => 79,  252 => 78,  249 => 77,  247 => 76,  242 => 75,  239 => 74,  237 => 73,  234 => 72,  232 => 71,  227 => 70,  224 => 69,  222 => 68,  219 => 67,  217 => 66,  212 => 65,  209 => 64,  206 => 63,  202 => 62,  199 => 61,  196 => 60,  193 => 59,  188 => 58,  185 => 57,  183 => 56,  179 => 55,  174 => 53,  171 => 52,  167 => 51,  160 => 46,  153 => 44,  147 => 42,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  130 => 37,  126 => 36,  123 => 35,  119 => 33,  117 => 32,  104 => 22,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  74 => 13,  66 => 7,  62 => 6,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/clases.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\clases.html.twig");
    }
}
