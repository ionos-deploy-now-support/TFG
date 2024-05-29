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

/* revisiones/revisiones_clase.html.twig */
class __TwigTemplate_6a5001367d67bf7ac85aeffea976b1c2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revisiones/revisiones_clase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revisiones/revisiones_clase.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "revisiones/revisiones_clase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<div class=\"lista_revisiones\">
    <h1>Revisiones de las Clases</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisiones"]) || array_key_exists("revisiones", $context) ? $context["revisiones"] : (function () { throw new RuntimeError('Variable "revisiones" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 9
            echo "    <div class=\"elemento_revisiones\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "img", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
        <h2>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "Nombre", [], "any", false, false, false, 11), "html", null, true);
            echo "</h2>
        <div>
            <button onclick=\"location.href='";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comprobar_clase", ["id" => twig_get_attribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "'\" class=\"btn btn-info\">Ver más</button>
            <button onclick=\"location.href='";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validar_clase", ["id" => twig_get_attribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "'\" class=\"btn btn-success\">Validar clase</button>
            <button onclick=\"location.href='";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eliminar_clase", ["id" => twig_get_attribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "'\" class=\"btn btn-danger\">Eliminar clase</button>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "revisiones/revisiones_clase.html.twig";
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
        return array (  108 => 19,  98 => 15,  94 => 14,  90 => 13,  85 => 11,  81 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


<div class=\"lista_revisiones\">
    <h1>Revisiones de las Clases</h1>
    {% for revision in revisiones %}
    <div class=\"elemento_revisiones\">
        <img src=\"{{revision.img}}\">
        <h2>{{ revision.Nombre }}</h2>
        <div>
            <button onclick=\"location.href='{{ path(\"app_comprobar_clase\", {'id': revision.id}) }}'\" class=\"btn btn-info\">Ver más</button>
            <button onclick=\"location.href='{{ path('app_validar_clase', {'id': revision.id}) }}'\" class=\"btn btn-success\">Validar clase</button>
            <button onclick=\"location.href='{{ path('app_eliminar_clase', {'id': revision.id}) }}'\" class=\"btn btn-danger\">Eliminar clase</button>
        </div>
    </div>
    {% endfor %}
</div>

{% endblock %}", "revisiones/revisiones_clase.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\revisiones\\revisiones_clase.html.twig");
    }
}
