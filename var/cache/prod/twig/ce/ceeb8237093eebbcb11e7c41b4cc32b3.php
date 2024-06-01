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
class __TwigTemplate_89b6d957c2e032c58a8ab37a83ce0558 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/subclases.html.twig", 1);
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
        echo "   <div class=\"grid-body\">
      <div class=\"L1\"></div>
      <div class=\"L2\"></div>
      <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subclase"] ?? null), "nombre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\"><b>Requisitos: </b> <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subclase"] ?? null), "Requisitos", [], "any", false, false, false, 14), "html", null, true);
        echo "</p></div>
                <div  class=\"I\" ><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subclase"] ?? null), "img", [], "any", false, false, false, 15), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 25) == 3)) {
            // line 26
            echo "                    <th>Despliegue Artístico</th>
                ";
        }
        // line 28
        echo "            </tr>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabla"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["linea"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["linea"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["linea"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[2] ?? null) : null), "html", null, true);
            echo "</td>
                        ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 34) == 3)) {
                // line 35
                echo "                            <td>";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["linea"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[3] ?? null) : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["rasgos"] ?? null));
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
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 53
                    echo "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 54
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 54), $context["i"], 5) == "{|S|}")) {
                    // line 55
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), "
"]);
                    // line 56
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 57
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 57), $context["i"], 5) == "{|B|}")) {
                    // line 58
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 78), $context["i"], 1)]);
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
            echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_clase", ["id" => twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\">
                     <img class=\"I\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "img", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
                     <h2 class=\"N\">";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Nombre", [], "any", false, false, false, 92), "html", null, true);
        echo "</h2>
                     <span class=\"E\"></span>
                     <i class=\"C\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Competencias", [], "any", false, false, false, 94), "html", null, true);
        echo "</i>
                     <i class=\"A\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Autor", [], "any", false, false, false, 95), "html", null, true);
        echo "</i>
                     <span class=\"S\"><b>Salvaciones:</b> ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["clase"] ?? null), "Salvaciones", [], "any", false, false, false, 96), "html", null, true);
        echo "</span>
                  </a>
                </div>
      </div>

   </div>
    
";
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
        return array (  298 => 96,  294 => 95,  290 => 94,  285 => 92,  281 => 91,  277 => 90,  270 => 85,  259 => 81,  253 => 80,  250 => 79,  247 => 78,  244 => 77,  242 => 76,  239 => 75,  237 => 74,  232 => 73,  229 => 72,  227 => 71,  224 => 70,  222 => 69,  217 => 68,  214 => 67,  212 => 66,  209 => 65,  207 => 64,  202 => 63,  199 => 62,  197 => 61,  194 => 60,  192 => 59,  187 => 58,  184 => 57,  181 => 56,  177 => 55,  174 => 54,  171 => 53,  168 => 52,  163 => 51,  160 => 50,  158 => 49,  154 => 48,  149 => 46,  146 => 45,  142 => 44,  135 => 39,  128 => 37,  122 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  105 => 30,  101 => 29,  98 => 28,  94 => 26,  92 => 25,  79 => 15,  75 => 14,  70 => 12,  62 => 6,  58 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/subclases.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\mostrar\\subclases.html.twig");
    }
}
