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

/* buscador/razaok.html.twig */
class __TwigTemplate_95ee00fbd346a4b5824380ec1587266d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/razaok.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/razaok.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/razaok.html.twig", 1);
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
        echo "   <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 7, $this->source); })()), "Nombre", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
   <h3>Fuerza: ";
        // line 8
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 8, $this->source); })()), "Fuerza", [], "any", false, false, false, 8) - 1), "html", null, true);
        echo "</h3>
    <h3>Destreza: ";
        // line 9
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 9, $this->source); })()), "Destreza", [], "any", false, false, false, 9) - 1), "html", null, true);
        echo "</h3>
    <h3>Constitución: ";
        // line 10
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 10, $this->source); })()), "Constitucion", [], "any", false, false, false, 10) - 1), "html", null, true);
        echo "</h3>
    <h3>Inteligencia: ";
        // line 11
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 11, $this->source); })()), "Inteligencia", [], "any", false, false, false, 11) - 1), "html", null, true);
        echo "</h3>
    <h3>Sabiduría: ";
        // line 12
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 12, $this->source); })()), "Sabiduria", [], "any", false, false, false, 12) - 1), "html", null, true);
        echo "</h3>
    <h3>Carisma: ";
        // line 13
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 13, $this->source); })()), "Carisma", [], "any", false, false, false, 13) - 1), "html", null, true);
        echo "</h3>
    <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 14, $this->source); })()), "Descripcion", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
    <p>Ataque Desarmado: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["raza"]) || array_key_exists("raza", $context) ? $context["raza"] : (function () { throw new RuntimeError('Variable "raza" does not exist.', 15, $this->source); })()), "AtaqueDesarmado", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/razaok.html.twig";
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
        return array (  129 => 15,  125 => 14,  121 => 13,  117 => 12,  113 => 11,  109 => 10,  105 => 9,  101 => 8,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
 {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('styles/bodygrid.css') }}\">
{% endblock %}
{% block body %}
   <h1>{{raza.Nombre}}</h1>
   <h3>Fuerza: {{raza.Fuerza -1}}</h3>
    <h3>Destreza: {{raza.Destreza -1}}</h3>
    <h3>Constitución: {{raza.Constitucion -1}}</h3>
    <h3>Inteligencia: {{raza.Inteligencia -1}}</h3>
    <h3>Sabiduría: {{raza.Sabiduria -1}}</h3>
    <h3>Carisma: {{raza.Carisma -1}}</h3>
    <p>{{raza.Descripcion}}</p>
    <p>Ataque Desarmado: {{raza.AtaqueDesarmado}}</p>
{% endblock %}


", "buscador/razaok.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\razaok.html.twig");
    }
}
