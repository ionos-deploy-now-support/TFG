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

/* buscador/index.html.twig */
class __TwigTemplate_da38419603402afd88c9a13bada3c5a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"indices\">
    <h1>Buscador</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buscador_clase");
        echo "\">
        <span><i class=\"icofont-shield\"></i> Clases</span>
    </a>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buscador_razas");
        echo "\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span>
    </a>
    <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buscador_trasfondo");
        echo "\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span>
    </a>
     <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buscador_dotes");
        echo "\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span>
    </a>
     <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buscador_hechizos");
        echo "\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span>
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
        return "buscador/index.html.twig";
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
        return array (  97 => 20,  91 => 17,  85 => 14,  79 => 11,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"indices\">
    <h1>Buscador</h1>
    <a href=\"{{ path(\"app_buscador_clase\") }}\">
        <span><i class=\"icofont-shield\"></i> Clases</span>
    </a>
    <a href=\"{{ path(\"app_buscador_razas\") }}\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span>
    </a>
    <a href=\"{{ path(\"app_buscador_trasfondo\") }}\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span>
    </a>
     <a href=\"{{ path(\"app_buscador_dotes\") }}\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span>
    </a>
     <a href=\"{{ path(\"app_buscador_hechizos\") }}\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span>
    </a>
</div>



{% endblock %}
", "buscador/index.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\index.html.twig");
    }
}
