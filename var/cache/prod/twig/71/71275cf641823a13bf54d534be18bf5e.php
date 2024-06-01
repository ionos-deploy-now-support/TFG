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

/* buscador/mostrar/razas.html.twig */
class __TwigTemplate_3f590ce7e9a043b57762fee6527769b7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/razas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        echo "\">
";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">
                    <span><b>Velocidad: </b>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Velocidad", [], "any", false, false, false, 15), "html", null, true);
        echo "ft</span><br>
                    <span><b>Ataque desarmado: </b>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "AtaqueDesarmado", [], "any", false, false, false, 16), "html", null, true);
        echo "</span><br>
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Descripcion", [], "any", false, false, false, 17), "html", null, true);
        echo "
                </div>
                <div  class=\"I\" ><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "img", [], "any", false, false, false, 19), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Fuerza", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Destreza</td>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Destreza", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Constitución</td>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Constitucion", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Inteligencia</td>
                    <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Inteligencia", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Sabiduría</td>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Sabiduria", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td>Carisma</td>
                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["raza"] ?? null), "Carisma", [], "any", false, false, false, 51), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["rasgos"] ?? null));
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
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 67
                    echo "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 68
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 68), $context["i"], 5) == "{|S|}")) {
                    // line 69
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), "
"]);
                    // line 70
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 71
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 71), $context["i"], 5) == "{|B|}")) {
                    // line 72
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 92), $context["i"], 1)]);
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
            echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
            <h1>Subrazas</h1>
                <div class=\"listado\">
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subrazas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subraza"]) {
            // line 105
            echo "                        <a class=\"elemento\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subraza", ["id" => twig_get_attribute($this->env, $this->source, $context["subraza"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">
                            <img class=\"I\" src=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subraza"], "img", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
                            <h2 class=\"N\">";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subraza"], "Nombre", [], "any", false, false, false, 107), "html", null, true);
            echo "</h2>
                            <span class=\"E\"></span>
                            <i class=\"S\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subraza"], "Descripcion", [], "any", false, false, false, 109), "html", null, true);
            echo "</i>
                            <i class=\"A\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subraza"], "Autor", [], "any", false, false, false, 110), "html", null, true);
            echo "</i>
                            <span class=\"C\"></span>
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subraza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </div>
        </div>
    </div>
    
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/mostrar/razas.html.twig";
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
        return array (  316 => 114,  306 => 110,  302 => 109,  297 => 107,  293 => 106,  288 => 105,  284 => 104,  277 => 99,  266 => 95,  260 => 94,  257 => 93,  254 => 92,  251 => 91,  249 => 90,  246 => 89,  244 => 88,  239 => 87,  236 => 86,  234 => 85,  231 => 84,  229 => 83,  224 => 82,  221 => 81,  219 => 80,  216 => 79,  214 => 78,  209 => 77,  206 => 76,  204 => 75,  201 => 74,  199 => 73,  194 => 72,  191 => 71,  188 => 70,  184 => 69,  181 => 68,  178 => 67,  175 => 66,  170 => 65,  167 => 64,  165 => 63,  161 => 62,  156 => 60,  153 => 59,  149 => 58,  139 => 51,  132 => 47,  125 => 43,  118 => 39,  111 => 35,  104 => 31,  89 => 19,  84 => 17,  80 => 16,  76 => 15,  70 => 12,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/razas.html.twig", "E:\\TFG\\templates\\buscador\\mostrar\\razas.html.twig");
    }
}
