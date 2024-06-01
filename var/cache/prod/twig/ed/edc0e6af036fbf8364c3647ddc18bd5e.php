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
class __TwigTemplate_a363ebd3399b68968f13070b88b336d5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/trasfondos.html.twig", 1);
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
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Plano", [], "any", false, false, false, 15) != null)) {
            echo "<h3>Plano: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Plano", [], "any", false, false, false, 15), "html", null, true);
            echo "</h3>";
        }
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Descripcion", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "img", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Competencias y objetos iniciales</h1>
            <table class=\"Progreso\">
                ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Idiomas", [], "any", false, false, false, 22) != null)) {
            // line 23
            echo "                <tr>
                    <td><b>Idiomas</b></td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Idiomas", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 28
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Competencias", [], "any", false, false, false, 28) != null)) {
            // line 29
            echo "                <tr>
                    <td><b>Competencias</b></td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "Competencias", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        // line 34
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "ObjetosIniciales", [], "any", false, false, false, 34) != null)) {
            // line 35
            echo "                <tr>
                    <td><b>Objetos Iniciales</b></td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["trasfondo"] ?? null), "ObjetosIniciales", [], "any", false, false, false, 37), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["rasgos"] ?? null));
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
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 54
                    echo "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 55
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 55), $context["i"], 5) == "{|S|}")) {
                    // line 56
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), "
"]);
                    // line 57
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 58
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 58), $context["i"], 5) == "{|B|}")) {
                    // line 59
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "descripcion", [], "any", false, false, false, 79), $context["i"], 1)]);
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
            echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
        return array (  271 => 86,  260 => 82,  254 => 81,  251 => 80,  248 => 79,  245 => 78,  243 => 77,  240 => 76,  238 => 75,  233 => 74,  230 => 73,  228 => 72,  225 => 71,  223 => 70,  218 => 69,  215 => 68,  213 => 67,  210 => 66,  208 => 65,  203 => 64,  200 => 63,  198 => 62,  195 => 61,  193 => 60,  188 => 59,  185 => 58,  182 => 57,  178 => 56,  175 => 55,  172 => 54,  169 => 53,  164 => 52,  161 => 51,  159 => 50,  155 => 49,  150 => 47,  147 => 46,  143 => 45,  136 => 40,  130 => 37,  126 => 35,  123 => 34,  117 => 31,  113 => 29,  110 => 28,  104 => 25,  100 => 23,  98 => 22,  89 => 16,  79 => 15,  74 => 13,  66 => 7,  62 => 6,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/trasfondos.html.twig", "E:\\TFG\\templates\\buscador\\mostrar\\trasfondos.html.twig");
    }
}
