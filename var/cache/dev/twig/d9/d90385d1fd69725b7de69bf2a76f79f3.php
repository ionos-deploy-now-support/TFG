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

/* buscador/mostrar/dotes.html.twig */
class __TwigTemplate_0feec1894552e54e596cf8876206df72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/dotes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/mostrar/dotes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/dotes.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dote"]) || array_key_exists("dote", $context) ? $context["dote"] : (function () { throw new RuntimeError('Variable "dote" does not exist.', 13, $this->source); })()), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\"><br>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dote"]) || array_key_exists("dote", $context) ? $context["dote"] : (function () { throw new RuntimeError('Variable "dote" does not exist.', 15, $this->source); })()), "Descripcion", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dote"]) || array_key_exists("dote", $context) ? $context["dote"] : (function () { throw new RuntimeError('Variable "dote" does not exist.', 16, $this->source); })()), "img", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Requisitos</h1>
            <table class=\"Progreso\">
                <th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dote"]) || array_key_exists("dote", $context) ? $context["dote"] : (function () { throw new RuntimeError('Variable "dote" does not exist.', 23, $this->source); })()), "Requisitos", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
                </th>
            </table>
        </div>
        <div class=\"RC\">
            <h1>Beneficios</h1>
            <div class=\"grid-rasgos\">
                <span class=\"N\"><b>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dote"]) || array_key_exists("dote", $context) ? $context["dote"] : (function () { throw new RuntimeError('Variable "dote" does not exist.', 30, $this->source); })()), "nombre", [], "any", false, false, false, 30), "html", null, true);
        echo "</b></span>
                <span class=\"V1\"></span>
                <span class=\"L\"></span>
                <span class=\"D\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dote"]) || array_key_exists("dote", $context) ? $context["dote"] : (function () { throw new RuntimeError('Variable "dote" does not exist.', 33, $this->source); })()), "Beneficios", [], "any", false, false, false, 33), "html", null, true);
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
        return "buscador/mostrar/dotes.html.twig";
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
        return array (  139 => 33,  133 => 30,  123 => 23,  113 => 16,  109 => 15,  104 => 13,  96 => 7,  86 => 6,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
                <h1 class=\"N\">{{dote.nombre}}</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\"><br>{{dote.Descripcion}}</div>
                <div class=\"I\" ><img src=\"{{dote.img}}\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Requisitos</h1>
            <table class=\"Progreso\">
                <th>
                    <td>{{dote.Requisitos}}</td>
                </th>
            </table>
        </div>
        <div class=\"RC\">
            <h1>Beneficios</h1>
            <div class=\"grid-rasgos\">
                <span class=\"N\"><b>{{dote.nombre}}</b></span>
                <span class=\"V1\"></span>
                <span class=\"L\"></span>
                <span class=\"D\">{{dote.Beneficios}}</span> 
            </div>
        </div>
        <div class=\"SU\"></div>
    </div>
{% endblock %}


", "buscador/mostrar/dotes.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\mostrar\\dotes.html.twig");
    }
}
