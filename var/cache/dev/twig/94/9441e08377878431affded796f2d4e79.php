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

/* buscador/claseok.html.twig */
class __TwigTemplate_5738eb37609a3529e6f76a87ae933bb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/claseok.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/claseok.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/claseok.html.twig", 1);
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
                
                 <div class=\"H\"><b>Habilidades: </b> <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 15, $this->source); })()), "HabilidadesAElegir", [], "any", false, false, false, 15), "html", null, true);
        echo "</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 16, $this->source); })()), "Competencias", [], "any", false, false, false, 16), "html", null, true);
        echo "</p></div>
                
               
                <div class=\"E\"> <b >Equipo: </b> <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 19, $this->source); })()), "Equipamiento", [], "any", false, false, false, 19), "html", null, true);
        echo "</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 20, $this->source); })()), "PuntosDeGolpe", [], "any", false, false, false, 20), "html", null, true);
        echo "</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 21, $this->source); })()), "Salvaciones", [], "any", false, false, false, 21), "html", null, true);
        echo "</p></div>
                <div class=\"R\"><b >Requisitos: </b> <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 22, $this->source); })()), "Requisitos", [], "any", false, false, false, 22), "html", null, true);
        echo "</p></div>
                <div  class=\"I\" ><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clase"]) || array_key_exists("clase", $context) ? $context["clase"] : (function () { throw new RuntimeError('Variable "clase" does not exist.', 23, $this->source); })()), "img", [], "any", false, false, false, 23), "html", null, true);
        echo "\"/></div>
                <span class=\"V2\"></span>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Tabla de Progresión</h1>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de Clase</h1>
            <div>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rasgos"]) || array_key_exists("rasgos", $context) ? $context["rasgos"] : (function () { throw new RuntimeError('Variable "rasgos" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habilidad"]) {
            // line 34
            echo "                    <div class=\"grid-rasgos\">
                        <span class=\"N\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "nombre", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                        <span class=\"V1\"></span>
                        <span class=\"L\">Nivel ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "OrigenNivel", [], "any", false, false, false, 37), "html", null, true);
            echo "</span>
                        <span class=\"D\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["habilidad"], "Descripción", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                         
                    </div><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habilidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
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
        return "buscador/claseok.html.twig";
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
        return array (  174 => 42,  164 => 38,  160 => 37,  155 => 35,  152 => 34,  148 => 33,  135 => 23,  131 => 22,  127 => 21,  123 => 20,  119 => 19,  113 => 16,  109 => 15,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                
                 <div class=\"H\"><b>Habilidades: </b> <p>{{clase.HabilidadesAElegir}}</p></div>
                <div class=\"C\"><b>Competencias: </b> <p>{{clase.Competencias}}</p></div>
                
               
                <div class=\"E\"> <b >Equipo: </b> <p>{{clase.Equipamiento}}</p></div>
                <div class=\"P\"><b>Puntos de golpe: </b> <p>{{clase.PuntosDeGolpe}}</p></div>
                <div class=\"S\"><b>Salvaciones: </b> <p>{{clase.Salvaciones}}</p></div>
                <div class=\"R\"><b >Requisitos: </b> <p>{{clase.Requisitos}}</p></div>
                <div  class=\"I\" ><img src=\"{{clase.img}}\"/></div>
                <span class=\"V2\"></span>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Tabla de Progresión</h1>
        </div>
        <div class=\"RC\">
            <h1>Rasgos de Clase</h1>
            <div>
                {% for habilidad in rasgos %}
                    <div class=\"grid-rasgos\">
                        <span class=\"N\">{{habilidad.nombre}}</span>
                        <span class=\"V1\"></span>
                        <span class=\"L\">Nivel {{habilidad.OrigenNivel}}</span>
                        <span class=\"D\">{{habilidad.Descripción}}</span>
                         
                    </div><br>
                {% endfor %}
            </div>
        </div>
        <div class=\"L2\"></div>
    </div>
{% endblock %}

", "buscador/claseok.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\claseok.html.twig");
    }
}
