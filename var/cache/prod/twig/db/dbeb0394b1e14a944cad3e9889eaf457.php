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
class __TwigTemplate_8da2e472bd348323e345400590454b45 extends Template
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
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["datos"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["Nombre"] ?? null) : null), "html", null, true);
        echo "</b>: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["datos"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Clase"] ?? null) : null), "Nombre", [], "any", false, false, false, 21), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["datos"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["Subclase"] ?? null) : null), "Nombre", [], "any", false, false, false, 21), "html", null, true);
        echo " de nivel ";
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["datos"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Nivel"] ?? null) : null), "html", null, true);
        echo "</span>
            <br><span>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["datos"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["Raza"] ?? null) : null), "Nombre", [], "any", false, false, false, 22), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["datos"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["Subraza"] ?? null) : null), "Nombre", [], "any", false, false, false, 22), "html", null, true);
        echo ".</span>
            <br><span>Trasfondo: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["datos"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["Ocupacion"] ?? null) : null), "Nombre", [], "any", false, false, false, 23), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["datos"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["Origen"] ?? null) : null), "Nombre", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
            <br><span>Ataque desarmado: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["datos"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["Subraza"] ?? null) : null), "AtaqueDesarmado", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
            <hr>
    </div>
    <div class=\"TP\">
        <div class=\"grid-ficha-stats1\">
            <div class=\"Fuerza\">
                <h4>Estadísticas</h4>
                <div class=\"puntuacion\"></div><i>Base ";
        // line 31
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["datos"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["Raza"] ?? null) : null), "Fuerza", [], "any", false, false, false, 31)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["datos"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["Subraza"] ?? null) : null), "Fuerza", [], "any", false, false, false, 31)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Destreza\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 34
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["datos"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Raza"] ?? null) : null), "Destreza", [], "any", false, false, false, 34)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["datos"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["Subraza"] ?? null) : null), "Destreza", [], "any", false, false, false, 34)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Constitucion\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 37
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["datos"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["Raza"] ?? null) : null), "Constitucion", [], "any", false, false, false, 37)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["datos"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Subraza"] ?? null) : null), "Constitucion", [], "any", false, false, false, 37)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Inteligencia\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 40
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["datos"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Raza"] ?? null) : null), "Inteligencia", [], "any", false, false, false, 40)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["datos"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["Subraza"] ?? null) : null), "Inteligencia", [], "any", false, false, false, 40)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Sabiduria\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 43
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["datos"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Raza"] ?? null) : null), "Sabiduria", [], "any", false, false, false, 43)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["datos"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["Subraza"] ?? null) : null), "Sabiduria", [], "any", false, false, false, 43)), "html", null, true);
        echo "</i>
            </div>
            <div class=\"Carisma\">
                <div class=\"puntuacion\"></div><i>Base ";
        // line 46
        echo twig_escape_filter($this->env, ((8 + twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["datos"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Raza"] ?? null) : null), "Carisma", [], "any", false, false, false, 46)) + twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = ($context["datos"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["Subraza"] ?? null) : null), "Carisma", [], "any", false, false, false, 46)), "html", null, true);
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
        if (twig_in_filter("Fuerza", twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["datos"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 58))) {
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
        if (twig_in_filter("Destreza", twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = ($context["datos"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 66))) {
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
        if (twig_in_filter("Constitución", twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = ($context["datos"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 74))) {
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
        if (twig_in_filter("Inteligencia", twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = ($context["datos"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 82))) {
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
        if (twig_in_filter("Sabiduría", twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = ($context["datos"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 90))) {
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
        if (twig_in_filter("Carisma", twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = ($context["datos"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["Clase"] ?? null) : null), "Salvaciones", [], "any", false, false, false, 98))) {
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
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_27 = ($context["datos"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Habilidades"] ?? null) : null));
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
                if ((($context["buffer"] ?? null) > 0)) {
                    // line 238
                    echo "                                                ";
                    $context["buffer"] = (($context["buffer"] ?? null) - 1);
                    // line 239
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 239), $context["i"], 5) == "{|S|}")) {
                    // line 240
                    echo "                                                ";
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), "
"]);
                    // line 241
                    echo "                                                ";
                    $context["buffer"] = 4;
                    // line 242
                    echo "                                            ";
                } elseif ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 242), $context["i"], 5) == "{|B|}")) {
                    // line 243
                    echo "                                                ";
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
                    $context["parraf"] = twig_join_filter([($context["parraf"] ?? null), twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["elemento"], "Descripcion", [], "any", false, false, false, 263), $context["i"], 1)]);
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
            echo twig_nl2br(twig_escape_filter($this->env, ($context["parraf"] ?? null), "html", null, true));
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
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ficha de ";
        echo twig_escape_filter($this->env, (($__internal_compile_28 = ($context["datos"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["Nombre"] ?? null) : null), "html", null, true);
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        $this->displayBlock('importmap', $context, $blocks);
        // line 15
        echo "        ";
    }

    // line 14
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
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
        return array (  532 => 14,  528 => 15,  525 => 14,  521 => 13,  514 => 9,  509 => 8,  505 => 7,  497 => 5,  491 => 268,  482 => 266,  476 => 265,  473 => 264,  470 => 263,  467 => 262,  465 => 261,  462 => 260,  460 => 259,  455 => 258,  452 => 257,  450 => 256,  447 => 255,  445 => 254,  440 => 253,  437 => 252,  435 => 251,  432 => 250,  430 => 249,  425 => 248,  422 => 247,  420 => 246,  417 => 245,  415 => 244,  410 => 243,  407 => 242,  404 => 241,  400 => 240,  397 => 239,  394 => 238,  391 => 237,  386 => 236,  383 => 235,  381 => 234,  376 => 233,  372 => 231,  370 => 230,  367 => 229,  365 => 228,  362 => 227,  360 => 226,  354 => 224,  350 => 223,  228 => 103,  224 => 101,  220 => 99,  218 => 98,  213 => 95,  209 => 93,  205 => 91,  203 => 90,  198 => 87,  194 => 85,  190 => 83,  188 => 82,  183 => 79,  179 => 77,  175 => 75,  173 => 74,  168 => 71,  164 => 69,  160 => 67,  158 => 66,  153 => 63,  149 => 61,  145 => 59,  143 => 58,  128 => 46,  122 => 43,  116 => 40,  110 => 37,  104 => 34,  98 => 31,  88 => 24,  82 => 23,  76 => 22,  66 => 21,  59 => 16,  57 => 13,  54 => 12,  52 => 7,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "personaje/ficha.html.twig", "E:\\TFG\\templates\\personaje\\ficha.html.twig");
    }
}
