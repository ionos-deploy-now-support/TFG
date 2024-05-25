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

/* buscador/resultados/trasfondos.html.twig */
class __TwigTemplate_8479470b5482761c15153102e03fb7fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/resultados/trasfondos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/resultados/trasfondos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/resultados/trasfondos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"listado\">
     ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultado"]) || array_key_exists("resultado", $context) ? $context["resultado"] : (function () { throw new RuntimeError('Variable "resultado" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trasfondo"]) {
            // line 6
            echo "     <a class=\"elemento\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trasfondo", ["id" => twig_get_attribute($this->env, $this->source, $context["trasfondo"], "id", [], "any", false, false, false, 6)]), "html", null, true);
            echo "\">
        <img class=\"I\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trasfondo"], "img", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
       <h2 class=\"N\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trasfondo"], "Nombre", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
       <span class=\"E\"></span>
       <b class=\"S\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trasfondo"], "Origen", [], "any", false, false, false, 10), "html", null, true);
            echo "</b>
        <i class=\"A\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trasfondo"], "Autor", [], "any", false, false, false, 11), "html", null, true);
            echo "</i>
        <i class=\"C\"> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trasfondo"], "Descripcion", [], "any", false, false, false, 12), "html", null, true);
            echo "</i>

         
      </a>
      
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trasfondo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  
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
        return "buscador/resultados/trasfondos.html.twig";
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
        return array (  110 => 18,  98 => 12,  94 => 11,  90 => 10,  85 => 8,  81 => 7,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<div class=\"listado\">
     {% for trasfondo in resultado %}
     <a class=\"elemento\" href=\"{{ path( \"app_trasfondo\", { \"id\": trasfondo.id} ) }}\">
        <img class=\"I\" src=\"{{trasfondo.img}}\">
       <h2 class=\"N\">{{ trasfondo.Nombre }}</h2>
       <span class=\"E\"></span>
       <b class=\"S\">{{trasfondo.Origen}}</b>
        <i class=\"A\">{{trasfondo.Autor}}</i>
        <i class=\"C\"> {{trasfondo.Descripcion}}</i>

         
      </a>
      
     {% endfor %}
  
 </div>
 



{% endblock %}


", "buscador/resultados/trasfondos.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\resultados\\trasfondos.html.twig");
    }
}
