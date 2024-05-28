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

/* buscador/mostrar/hechizos.html.twig */
class __TwigTemplate_2a99ab1681b4a86aeff2a48aca3a714b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/hechizos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/hechizos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/hechizos.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">Nivel: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 15, $this->source); })()), "Nivel", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 16, $this->source); })()), "img", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Datos técnicos del hechizo</h1>
            <table class=\"Progreso\">
                <tr>
                    <td><b>Escuela</b></td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 24, $this->source); })()), "Escuela", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Componentes</b></td>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 28, $this->source); })()), "Componentes", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Alcance</b></td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 32, $this->source); })()), "Rango", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Área de efecto</b></td>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 36, $this->source); })()), "ZonaEfecto", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Tiempo de Ejecución</b></td>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 40, $this->source); })()), "TiempoDeEjecucion", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Duración</b></td>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 44, $this->source); })()), "Duracion", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
        <div class=\"RC\">
            <h1>Beneficios</h1>
            <div class=\"grid-rasgos\">
                <span class=\"N\"><b>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 51, $this->source); })()), "Nombre", [], "any", false, false, false, 51), "html", null, true);
        echo "</b></span>
                <span class=\"V1\"></span>
                <span class=\"L\"><b>Nivel: ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 53, $this->source); })()), "Nivel", [], "any", false, false, false, 53), "html", null, true);
        echo "</b></span>
                <span class=\"D\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 54, $this->source); })()), "Descripcion", [], "any", false, false, false, 54), "html", null, true);
        echo "</span> 
            </div>
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
        return "buscador/mostrar/hechizos.html.twig";
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
        return array (  178 => 54,  174 => 53,  169 => 51,  159 => 44,  152 => 40,  145 => 36,  138 => 32,  131 => 28,  124 => 24,  113 => 16,  109 => 15,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                <h1 class=\"N\">{{hechizo.nombre}}</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">Nivel: {{hechizo.Nivel}}</div>
                <div class=\"I\" ><img src=\"{{hechizo.img}}\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Datos técnicos del hechizo</h1>
            <table class=\"Progreso\">
                <tr>
                    <td><b>Escuela</b></td>
                    <td>{{hechizo.Escuela}}</td>
                </tr>
                <tr>
                    <td><b>Componentes</b></td>
                    <td>{{hechizo.Componentes}}</td>
                </tr>
                <tr>
                    <td><b>Alcance</b></td>
                    <td>{{hechizo.Rango}}</td>
                </tr>
                <tr>
                    <td><b>Área de efecto</b></td>
                    <td>{{hechizo.ZonaEfecto}}</td>
                </tr>
                <tr>
                    <td><b>Tiempo de Ejecución</b></td>
                    <td>{{hechizo.TiempoDeEjecucion}}</td>
                </tr>
                <tr>
                    <td><b>Duración</b></td>
                    <td>{{hechizo.Duracion}}</td>
                </tr>
            </table>
        </div>
        <div class=\"RC\">
            <h1>Beneficios</h1>
            <div class=\"grid-rasgos\">
                <span class=\"N\"><b>{{hechizo.Nombre}}</b></span>
                <span class=\"V1\"></span>
                <span class=\"L\"><b>Nivel: {{hechizo.Nivel}}</b></span>
                <span class=\"D\">{{hechizo.Descripcion}}</span> 
            </div>
        </div>
        <div class=\"SU\"></div>
    </div>
    
{% endblock %}


", "buscador/mostrar/hechizos.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\mostrar\\hechizos.html.twig");
    }
}
