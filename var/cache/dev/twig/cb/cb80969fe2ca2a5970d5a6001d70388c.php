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

/* personaje/ficha.html.twig */
class __TwigTemplate_a51bd22e62211db9d080a08054e3319b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personaje/ficha.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personaje/ficha.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </head>
    <body class=\"grid-body\">
    <div class=\"L1\"></div>
    <div class=\"L2\"></div>
    <div class=\"DC\">
            <span class=\"Nombre\"><b>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 21, $this->source); })()), "Nombre", [], "array", false, false, false, 21), "html", null, true);
        echo "</b>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 21, $this->source); })()), "Clase", [], "array", false, false, false, 21), "Nombre", [], "any", false, false, false, 21), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 21, $this->source); })()), "Subclase", [], "array", false, false, false, 21), "Nombre", [], "any", false, false, false, 21), "html", null, true);
        echo " de nivel ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 21, $this->source); })()), "Nivel", [], "array", false, false, false, 21), "html", null, true);
        echo "</span>
            <br><span>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 22, $this->source); })()), "Raza", [], "array", false, false, false, 22), "Nombre", [], "any", false, false, false, 22), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 22, $this->source); })()), "Subraza", [], "array", false, false, false, 22), "Nombre", [], "any", false, false, false, 22), "html", null, true);
        echo ".</span>
            <br><span>Trasfondo: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 23, $this->source); })()), "Ocupacion", [], "array", false, false, false, 23), "Nombre", [], "any", false, false, false, 23), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 23, $this->source); })()), "Origen", [], "array", false, false, false, 23), "Nombre", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
            <br><span>Ataque desarmado: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 24, $this->source); })()), "Subraza", [], "array", false, false, false, 24), "AtaqueDesarmado", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
            <hr>
    </div>
    <div class=\"TP\">
        <div class=\"grid-ficha-stats1\">
            <div class=\"Fuerza\">
                <h4>Estadísticas</h4>
                <div class=\"puntuacion\"></div><i>Base ";
        // line 31
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 31, $this->source); })()), "Raza", [], "array", false, false, false, 31), "Fuerza", [], "any", false, false, false, 31)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 31, $this->source); })()), "Subraza", [], "array", false, false, false, 31), "Fuerza", [], "any", false, false, false, 31)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Destreza\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 34
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 34, $this->source); })()), "Raza", [], "array", false, false, false, 34), "Destreza", [], "any", false, false, false, 34)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 34, $this->source); })()), "Subraza", [], "array", false, false, false, 34), "Destreza", [], "any", false, false, false, 34)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Constitucion\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 37
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 37, $this->source); })()), "Raza", [], "array", false, false, false, 37), "Constitucion", [], "any", false, false, false, 37)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 37, $this->source); })()), "Subraza", [], "array", false, false, false, 37), "Constitucion", [], "any", false, false, false, 37)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Inteligencia\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 40
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 40, $this->source); })()), "Raza", [], "array", false, false, false, 40), "Inteligencia", [], "any", false, false, false, 40)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 40, $this->source); })()), "Subraza", [], "array", false, false, false, 40), "Inteligencia", [], "any", false, false, false, 40)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Sabiduria\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 43
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 43, $this->source); })()), "Raza", [], "array", false, false, false, 43), "Sabiduria", [], "any", false, false, false, 43)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 43, $this->source); })()), "Subraza", [], "array", false, false, false, 43), "Sabiduria", [], "any", false, false, false, 43)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Carisma\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 46
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 46, $this->source); })()), "Raza", [], "array", false, false, false, 46), "Carisma", [], "any", false, false, false, 46)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 46, $this->source); })()), "Subraza", [], "array", false, false, false, 46), "Carisma", [], "any", false, false, false, 46)), "html", null, true);
        echo "</i>
            </div>
        </div>
        
    </div>
    <div class=\"RC\">
        <div class=\"grid-ficha-stats2\">
            <div class=\"Salvaciones\">
                <div class=\"espacio\">
                    <h4>Salvaciones</h4>
                </div>
                <div class=\"Fuerza\">
                    ";
        // line 58
        if (twig_in_filter("Fuerza", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 58, $this->source); })()), "Clase", [], "array", false, false, false, 58), "Salvaciones", [], "any", false, false, false, 58))) {
            // line 59
            echo "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 61
            echo "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 63
        echo "                </div>
                <div class=\"A\">Fuerza</div>
                <div class=\"Destreza\">
                    ";
        // line 66
        if (twig_in_filter("Destreza", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 66, $this->source); })()), "Clase", [], "array", false, false, false, 66), "Salvaciones", [], "any", false, false, false, 66))) {
            // line 67
            echo "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 69
            echo "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 71
        echo "                </div>
                <div class=\"N\">Destreza</div>
                <div class=\"Constitucion\">
                    ";
        // line 74
        if (twig_in_filter("Constitución", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 74, $this->source); })()), "Clase", [], "array", false, false, false, 74), "Salvaciones", [], "any", false, false, false, 74))) {
            // line 75
            echo "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 77
            echo "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 79
        echo "                </div>
                <div class=\"E\">Constitución</div>
                <div class=\"Inteligencia\">
                    ";
        // line 82
        if (twig_in_filter("Inteligencia", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 82, $this->source); })()), "Clase", [], "array", false, false, false, 82), "Salvaciones", [], "any", false, false, false, 82))) {
            // line 83
            echo "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 85
            echo "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 87
        echo "                </div>
                <div class=\"I\">Inteligencia</div>
                <div class=\"Sabiduria\">
                    ";
        // line 90
        if (twig_in_filter("Sabiduría", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 90, $this->source); })()), "Clase", [], "array", false, false, false, 90), "Salvaciones", [], "any", false, false, false, 90))) {
            // line 91
            echo "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 93
            echo "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 95
        echo "                </div>
                <div class=\"V1\">Sabiduría</div>
                <div class=\"Carisma\">
                    ";
        // line 98
        if (twig_in_filter("Carisma", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 98, $this->source); })()), "Clase", [], "array", false, false, false, 98), "Salvaciones", [], "any", false, false, false, 98))) {
            // line 99
            echo "                    <div class=\"casilla_si\"></div> 
                    ";
        } else {
            // line 101
            echo "                    <div class=\"casilla\"></div>
                    ";
        }
        // line 103
        echo "                </div>
                <div class=\"V2\">Carisma</div>
            </div>
            <div class=\"Skills\">
                <div class=\"espacio\"><h4>Aptitudes</h4></div>
                <div class=\"Cs1\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s1\">
                    <span>Acrobacias</span>  
                </div>
                <div class=\"Cs2\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s2\">
                    <span>Trato con Animales</span>  
                </div>
                <div class=\"Cs3\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s3\">
                    <span>Arcano</span>  
                </div>
                <div class=\"Cs4\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s4\">
                    <span>Engaño</span>  
                </div>
                <div class=\"Cs5\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s5\">
                    <span>Historia</span>  
                </div>
                <div class=\"Cs6\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s6\">
                    <span>Perspicacia</span>  
                </div>
                <div class=\"Cs7\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s7\">
                    <span>Intimidación</span>  
                </div>
                <div class=\"Cs8\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s8\">
                    <span>Investigación</span>  
                </div>
                <div class=\"Cs9\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s9\">
                    <span>Medicina</span>  
                </div>
                <div class=\"Cs10\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s10\">
                    <span>Naturaleza</span>  
                </div>
                <div class=\"Cs11\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s11\">
                    <span>Percepción</span>  
                </div>
                <div class=\"Cs12\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s12\">
                    <span>Atletismo</span>  
                </div>
                <div class=\"Cs13\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s13\">
                    <span>Interpretación</span>  
                </div>
                <div class=\"Cs14\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s14\">
                    <span>Persuasión</span>  
                </div>
                <div class=\"Cs15\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s15\">
                    <span>Religión</span>  
                </div>
                <div class=\"Cs16\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s16\">
                    <span>Juego de Manos</span>  
                </div>
                <div class=\"Cs17\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s17\">
                    <span>Sigilo</span>  
                </div>
                <div class=\"Cs18\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s18\">
                    <span>Supervivencia</span>  
                </div>

            </div>
        </div>
    </div>
    <div class=\"SU\">
    <hr>
    <h2>Descripciones de habilidades</h2><hr><br>
        ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 223, $this->source); })()), "Habilidades", [], "array", false, false, false, 223));
        foreach ($context['_seq'] as $context["_key"] => $context["elemento"]) {
            // line 224
            echo "                    <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Nombre", [], "any", false, false, false, 224), "html", null, true);
            echo "</h4>
                    <i>Habilidad 
                    ";
            // line 226
            if (twig_in_filter("trasfondo_", twig_get_attribute($this->env, $this->source, $context["elemento"], "OrigenID", [], "any", false, false, false, 226))) {
                // line 227
                echo "                    de Trasfondo 
                    ";
            } elseif (twig_in_filter("razas_", twig_get_attribute($this->env, $this->source,             // line 228
$context["elemento"], "OrigenID", [], "any", false, false, false, 228))) {
                // line 229
                echo "                    de Raza
                    ";
            } elseif (twig_in_filter("clases_", twig_get_attribute($this->env, $this->source,             // line 230
$context["elemento"], "OrigenID", [], "any", false, false, false, 230))) {
                // line 231
                echo "                    de Clase
                    ";
            }
            // line 233
            echo "                    obtenida a nivel: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "OrigenNivel", [], "any", false, false, false, 233), "html", null, true);
            echo "</i><br><hr>
                                    <p>";
            // line 234
            $context["parraf"] = "";
            // line 235
            echo "                                        ";
            $context["buffer"] = 0;
            // line 236
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 236))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 237
                echo "                                            ";
                if (((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 237, $this->source); })()) > 0)) {
                    // line 238
                    echo "                                                ";
                    $context["buffer"] = ((isset($context["buffer"]) || array_key_exists("buffer", $context) ? $context["buffer"] : (function () { throw new RuntimeError('Variable "buffer" does not exist.', 238, $this->source); })()) - 1);
                    // line 239
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 239), $context["i"], 5) == "{|S|}")) {
                    // line 240
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 240, $this->source); })()), "
"]);
                    // line 241
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 242
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 242), $context["i"], 5) == "{|B|}")) {
                    // line 243
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 243, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 244
                    $context["parraf"] = "";
                    // line 245
                    echo "                                                <b>
                                                ";
                    // line 246
                    $context["buffer"] = 4;
                    // line 247
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 247), $context["i"], 5) == "{|I|}")) {
                    // line 248
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 248, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 249
                    $context["parraf"] = "";
                    // line 250
                    echo "                                                <i>
                                                ";
                    // line 251
                    $context["buffer"] = 4;
                    // line 252
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 252), $context["i"], 6) == "{|/B|}")) {
                    // line 253
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 253, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 254
                    $context["parraf"] = "";
                    // line 255
                    echo "                                                </b>
                                                ";
                    // line 256
                    $context["buffer"] = 5;
                    // line 257
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 257), $context["i"], 6) == "{|/I|}")) {
                    // line 258
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 258, $this->source); })()), "html", null, true));
                    echo "
                                                ";
                    // line 259
                    $context["parraf"] = "";
                    // line 260
                    echo "                                                </i>
                                                ";
                    // line 261
                    $context["buffer"] = 5;
                    // line 262
                    echo "                                            ";
                } else {
                    // line 263
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([(isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 263, $this->source); })()), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 263), $context["i"], 1)]);
                    // line 264
                    echo "                                            ";
                }
                // line 265
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "                                        ";
            echo twig_nl2br(twig_escape_filter($this->env, (isset($context["parraf"]) || array_key_exists("parraf", $context) ? $context["parraf"] : (function () { throw new RuntimeError('Variable "parraf" does not exist.', 266, $this->source); })()), "html", null, true));
            echo "</p><br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elemento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "    </div>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ficha de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datos"]) || array_key_exists("datos", $context) ? $context["datos"] : (function () { throw new RuntimeError('Variable "datos" does not exist.', 5, $this->source); })()), "Nombre", [], "array", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        echo "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        $this->displayBlock('importmap', $context, $blocks);
        // line 15
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "personaje/ficha.html.twig";
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
        return array (  580 => 14,  570 => 15,  567 => 14,  557 => 13,  544 => 9,  539 => 8,  529 => 7,  509 => 5,  497 => 268,  488 => 266,  482 => 265,  479 => 264,  476 => 263,  473 => 262,  471 => 261,  468 => 260,  466 => 259,  461 => 258,  458 => 257,  456 => 256,  453 => 255,  451 => 254,  446 => 253,  443 => 252,  441 => 251,  438 => 250,  436 => 249,  431 => 248,  428 => 247,  426 => 246,  423 => 245,  421 => 244,  416 => 243,  413 => 242,  410 => 241,  406 => 240,  403 => 239,  400 => 238,  397 => 237,  392 => 236,  389 => 235,  387 => 234,  382 => 233,  378 => 231,  376 => 230,  373 => 229,  371 => 228,  368 => 227,  366 => 226,  360 => 224,  356 => 223,  234 => 103,  230 => 101,  226 => 99,  224 => 98,  219 => 95,  215 => 93,  211 => 91,  209 => 90,  204 => 87,  200 => 85,  196 => 83,  194 => 82,  189 => 79,  185 => 77,  181 => 75,  179 => 74,  174 => 71,  170 => 69,  166 => 67,  164 => 66,  159 => 63,  155 => 61,  151 => 59,  149 => 58,  134 => 46,  128 => 43,  122 => 40,  116 => 37,  110 => 34,  104 => 31,  94 => 24,  88 => 23,  82 => 22,  72 => 21,  65 => 16,  63 => 13,  60 => 12,  58 => 7,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Ficha de {{datos['Nombre']}}{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/bodygrid.css') }}\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body class=\"grid-body\">
    <div class=\"L1\"></div>
    <div class=\"L2\"></div>
    <div class=\"DC\">
            <span class=\"Nombre\"><b>{{datos['Nombre']}}</b>: {{datos['Clase'].Nombre}} {{datos['Subclase'].Nombre}} de nivel {{datos['Nivel']}}</span>
            <br><span>{{datos['Raza'].Nombre}}, {{datos['Subraza'].Nombre}}.</span>
            <br><span>Trasfondo: {{datos['Ocupacion'].Nombre}} de {{datos['Origen'].Nombre}}</span>
            <br><span>Ataque desarmado: {{datos['Subraza'].AtaqueDesarmado}}</span>
            <hr>
    </div>
    <div class=\"TP\">
        <div class=\"grid-ficha-stats1\">
            <div class=\"Fuerza\">
                <h4>Estadísticas</h4>
                <div class=\"puntuacion\"></div><i>Base {{8 + datos['Raza'].Fuerza + datos['Subraza'].Fuerza}}</i>
            </div>
            <div class=\"Destreza\">
                <div class=\"puntuacion\"></div><i>Base {{8 + datos['Raza'].Destreza + datos['Subraza'].Destreza}}</i>
            </div>
            <div class=\"Constitucion\">
                <div class=\"puntuacion\"></div><i>Base {{8 + datos['Raza'].Constitucion + datos['Subraza'].Constitucion}}</i>
            </div>
            <div class=\"Inteligencia\">
                <div class=\"puntuacion\"></div><i>Base {{8 + datos['Raza'].Inteligencia + datos['Subraza'].Inteligencia}}</i>
            </div>
            <div class=\"Sabiduria\">
                <div class=\"puntuacion\"></div><i>Base {{8 + datos['Raza'].Sabiduria + datos['Subraza'].Sabiduria}}</i>
            </div>
            <div class=\"Carisma\">
                <div class=\"puntuacion\"></div><i>Base {{8 + datos['Raza'].Carisma + datos['Subraza'].Carisma}}</i>
            </div>
        </div>
        
    </div>
    <div class=\"RC\">
        <div class=\"grid-ficha-stats2\">
            <div class=\"Salvaciones\">
                <div class=\"espacio\">
                    <h4>Salvaciones</h4>
                </div>
                <div class=\"Fuerza\">
                    {% if \"Fuerza\" in datos['Clase'].Salvaciones %}
                    <div class=\"casilla_si\"></div> 
                    {% else %}
                    <div class=\"casilla\"></div>
                    {% endif %}
                </div>
                <div class=\"A\">Fuerza</div>
                <div class=\"Destreza\">
                    {% if \"Destreza\" in datos['Clase'].Salvaciones %}
                    <div class=\"casilla_si\"></div> 
                    {% else %}
                    <div class=\"casilla\"></div>
                    {% endif %}
                </div>
                <div class=\"N\">Destreza</div>
                <div class=\"Constitucion\">
                    {% if \"Constitución\" in datos['Clase'].Salvaciones %}
                    <div class=\"casilla_si\"></div> 
                    {% else %}
                    <div class=\"casilla\"></div>
                    {% endif %}
                </div>
                <div class=\"E\">Constitución</div>
                <div class=\"Inteligencia\">
                    {% if \"Inteligencia\" in datos['Clase'].Salvaciones %}
                    <div class=\"casilla_si\"></div> 
                    {% else %}
                    <div class=\"casilla\"></div>
                    {% endif %}
                </div>
                <div class=\"I\">Inteligencia</div>
                <div class=\"Sabiduria\">
                    {% if \"Sabiduría\" in datos['Clase'].Salvaciones %}
                    <div class=\"casilla_si\"></div> 
                    {% else %}
                    <div class=\"casilla\"></div>
                    {% endif %}
                </div>
                <div class=\"V1\">Sabiduría</div>
                <div class=\"Carisma\">
                    {% if \"Carisma\" in datos['Clase'].Salvaciones %}
                    <div class=\"casilla_si\"></div> 
                    {% else %}
                    <div class=\"casilla\"></div>
                    {% endif %}
                </div>
                <div class=\"V2\">Carisma</div>
            </div>
            <div class=\"Skills\">
                <div class=\"espacio\"><h4>Aptitudes</h4></div>
                <div class=\"Cs1\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s1\">
                    <span>Acrobacias</span>  
                </div>
                <div class=\"Cs2\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s2\">
                    <span>Trato con Animales</span>  
                </div>
                <div class=\"Cs3\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s3\">
                    <span>Arcano</span>  
                </div>
                <div class=\"Cs4\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s4\">
                    <span>Engaño</span>  
                </div>
                <div class=\"Cs5\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s5\">
                    <span>Historia</span>  
                </div>
                <div class=\"Cs6\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s6\">
                    <span>Perspicacia</span>  
                </div>
                <div class=\"Cs7\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s7\">
                    <span>Intimidación</span>  
                </div>
                <div class=\"Cs8\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s8\">
                    <span>Investigación</span>  
                </div>
                <div class=\"Cs9\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s9\">
                    <span>Medicina</span>  
                </div>
                <div class=\"Cs10\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s10\">
                    <span>Naturaleza</span>  
                </div>
                <div class=\"Cs11\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s11\">
                    <span>Percepción</span>  
                </div>
                <div class=\"Cs12\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s12\">
                    <span>Atletismo</span>  
                </div>
                <div class=\"Cs13\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s13\">
                    <span>Interpretación</span>  
                </div>
                <div class=\"Cs14\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s14\">
                    <span>Persuasión</span>  
                </div>
                <div class=\"Cs15\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s15\">
                    <span>Religión</span>  
                </div>
                <div class=\"Cs16\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s16\">
                    <span>Juego de Manos</span>  
                </div>
                <div class=\"Cs17\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s17\">
                    <span>Sigilo</span>  
                </div>
                <div class=\"Cs18\">
                    <div class=\"casilla\"></div>
                </div>
                <div class=\"s18\">
                    <span>Supervivencia</span>  
                </div>

            </div>
        </div>
    </div>
    <div class=\"SU\">
    <hr>
    <h2>Descripciones de habilidades</h2><hr><br>
        {% for elemento in datos['Habilidades']%}
                    <h4>{{elemento.Nombre}}</h4>
                    <i>Habilidad 
                    {% if \"trasfondo_\" in elemento.OrigenID %}
                    de Trasfondo 
                    {% elseif \"razas_\" in elemento.OrigenID %}
                    de Raza
                    {% elseif \"clases_\" in elemento.OrigenID %}
                    de Clase
                    {% endif %}
                    obtenida a nivel: {{elemento.OrigenNivel}}</i><br><hr>
                                    <p>{% set parraf = \"\"%}
                                        {% set buffer = 0 %}
                                        {% for i in 0.. elemento.Descripcion|length %}
                                            {% if buffer > 0 %}
                                                {% set buffer = buffer - 1 %}
                                            {% elseif elemento.Descripcion|slice(i,5) == \"{|S|}\" %}
                                                {% set parraf = [parraf,\"\\n\"]|join %}
                                                {% set buffer = 4 %}
                                            {% elseif elemento.Descripcion|slice(i,5) == \"{|B|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                <b>
                                                {% set buffer = 4 %}
                                            {% elseif elemento.Descripcion|slice(i,5) == \"{|I|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                <i>
                                                {% set buffer = 4 %}
                                            {% elseif elemento.Descripcion|slice(i,6) == \"{|/B|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                </b>
                                                {% set buffer = 5 %}
                                            {% elseif elemento.Descripcion|slice(i,6) == \"{|/I|}\" %}
                                                {{parraf|nl2br}}
                                                {% set parraf = \"\"%}
                                                </i>
                                                {% set buffer = 5 %}
                                            {% else %}
                                                {% set parraf = [parraf,elemento.Descripcion|slice(i,1)]|join %}
                                            {% endif %}
                                        {% endfor %}
                                        {{parraf|nl2br}}</p><br>
        {% endfor %}
    </div>
    </body>
</html>", "personaje/ficha.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\personaje\\ficha.html.twig");
    }
}
