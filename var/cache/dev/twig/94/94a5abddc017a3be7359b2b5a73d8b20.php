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

/* revisiones/revision_hechizo.html.twig */
class __TwigTemplate_818d07eae48a882f1997f77db040c88a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revisiones/revision_hechizo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revisiones/revision_hechizo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "revisiones/revision_hechizo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello BuscadorController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
   <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 11, $this->source); })()), "nombre", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
    <h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 12, $this->source); })()), "descripcion", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
    <h2>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 13, $this->source); })()), "nivel", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
    <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 14, $this->source); })()), "escuela", [], "any", false, false, false, 14), "html", null, true);
        echo "</h2>
    <h2>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 15, $this->source); })()), "rango", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
    <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 16, $this->source); })()), "componentes", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
    <h2>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 17, $this->source); })()), "zonaefecto", [], "any", false, false, false, 17), "html", null, true);
        echo "</h2>
    <h2>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 18, $this->source); })()), "tiempodeejecucion", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
    <h2>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 19, $this->source); })()), "duracion", [], "any", false, false, false, 19), "html", null, true);
        echo "</h2>
    <h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hechizo"]) || array_key_exists("hechizo", $context) ? $context["hechizo"] : (function () { throw new RuntimeError('Variable "hechizo" does not exist.', 20, $this->source); })()), "autor", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_hechizo");
        echo "\">Volver</a>
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
        return "revisiones/revision_hechizo.html.twig";
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
        return array (  135 => 21,  131 => 20,  127 => 19,  123 => 18,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BuscadorController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
   <h1>{{hechizo.nombre}}</h1>
    <h2>{{hechizo.descripcion}}</h2>
    <h2>{{hechizo.nivel}}</h2>
    <h2>{{hechizo.escuela}}</h2>
    <h2>{{hechizo.rango}}</h2>
    <h2>{{hechizo.componentes}}</h2>
    <h2>{{hechizo.zonaefecto}}</h2>
    <h2>{{hechizo.tiempodeejecucion}}</h2>
    <h2>{{hechizo.duracion}}</h2>
    <h2>{{hechizo.autor}}</h2>
    <a href=\"{{ path (\"app_revisiones_hechizo\")}}\">Volver</a>
</div>

{% endblock %}", "revisiones/revision_hechizo.html.twig", "/opt/TFG/templates/revisiones/revision_hechizo.html.twig");
    }
}
