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

/* revisiones/index.html.twig */
class __TwigTemplate_52095e01e5ef19c6c36655b563264df8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revisiones/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revisiones/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "revisiones/index.html.twig", 1);
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
        echo "<div class=\"indices\">
    <h1>Accesos Rápidos</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_clase");
        echo "\">
        <span><i class=\"icofont-shield\"></i> Clases</span> (";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["clases"]) || array_key_exists("clases", $context) ? $context["clases"] : (function () { throw new RuntimeError('Variable "clases" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_subclase");
        echo "\">
        <span><i class=\"icofont-duotone icofont-shield\"></i> Subclases</span> (";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["subclases"]) || array_key_exists("subclases", $context) ? $context["subclases"] : (function () { throw new RuntimeError('Variable "subclases" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_raza");
        echo "\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span> (";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["razas"]) || array_key_exists("razas", $context) ? $context["razas"] : (function () { throw new RuntimeError('Variable "razas" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
     <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_subraza");
        echo "\">
        <span><i class=\"icofont-user\"></i> Subrazas</span> (";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["subrazas"]) || array_key_exists("subrazas", $context) ? $context["subrazas"] : (function () { throw new RuntimeError('Variable "subrazas" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_trasfondo");
        echo "\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span> (";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["trasfondos"]) || array_key_exists("trasfondos", $context) ? $context["trasfondos"] : (function () { throw new RuntimeError('Variable "trasfondos" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
     <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_dote");
        echo "\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span> (";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["dotes"]) || array_key_exists("dotes", $context) ? $context["dotes"] : (function () { throw new RuntimeError('Variable "dotes" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
     <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_hechizo");
        echo "\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span> (";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["hechizos"]) || array_key_exists("hechizos", $context) ? $context["hechizos"] : (function () { throw new RuntimeError('Variable "hechizos" does not exist.', 33, $this->source); })()), "html", null, true);
        echo ")
    </a>
    
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
        return "revisiones/index.html.twig";
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
        return array (  156 => 33,  152 => 32,  146 => 29,  142 => 28,  136 => 25,  132 => 24,  126 => 21,  122 => 20,  116 => 17,  112 => 16,  106 => 13,  102 => 12,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BuscadorController!{% endblock %}

{% block body %}
<div class=\"indices\">
    <h1>Accesos Rápidos</h1>
    <a href=\"{{ path(\"app_revisiones_clase\") }}\">
        <span><i class=\"icofont-shield\"></i> Clases</span> ({{clases}})
    </a>
    
    <a href=\"{{ path(\"app_revisiones_subclase\") }}\">
        <span><i class=\"icofont-duotone icofont-shield\"></i> Subclases</span> ({{subclases}})
    </a>
    
    <a href=\"{{ path(\"app_revisiones_raza\") }}\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span> ({{razas}})
    </a>
    
     <a href=\"{{ path(\"app_revisiones_subraza\") }}\">
        <span><i class=\"icofont-user\"></i> Subrazas</span> ({{subrazas}})
    </a>
    
    <a href=\"{{ path(\"app_revisiones_trasfondo\") }}\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span> ({{trasfondos}})
    </a>
    
     <a href=\"{{ path(\"app_revisiones_dote\") }}\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span> ({{dotes}})
    </a>
    
     <a href=\"{{ path(\"app_revisiones_hechizo\") }}\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span> ({{hechizos}})
    </a>
    
</div>
{% endblock %}", "revisiones/index.html.twig", "/opt/TFG/templates/revisiones/index.html.twig");
    }
}
