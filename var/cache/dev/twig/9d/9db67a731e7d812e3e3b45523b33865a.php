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

/* index/index.html.twig */
class __TwigTemplate_d33405901794c2e800dc39d5e679fa83 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1 class=\"tituloApp\"><b>¡Bienvenido a DNDpedia!</b></h1>
<div class=\"indices\">
    <h1>Accesos Rápidos</h1>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_clases");
        echo "\">
        <span><i class=\"icofont-shield\"></i> Clases</span> 
    </a>
    
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_subclases");
        echo "\">
        <span><i class=\"icofont-duotone icofont-shield\"></i> Subclases</span> 
    </a>
    
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_razas");
        echo "\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span> 
    </a>
    
     <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_subrazas");
        echo "\">
        <span><i class=\"icofont-user\"></i> Subrazas</span> 
    </a>
    
    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_trasfondos");
        echo "\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span> 
    </a>
    
     <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_dotes");
        echo "\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span> 
    </a>
    
     <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_hechizos");
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
        return "index/index.html.twig";
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
        return array (  141 => 35,  134 => 31,  127 => 27,  120 => 23,  113 => 19,  106 => 15,  99 => 11,  94 => 8,  84 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {{ parent() }}
{% endblock %}
{% block body %}
<h1 class=\"tituloApp\"><b>¡Bienvenido a DNDpedia!</b></h1>
<div class=\"indices\">
    <h1>Accesos Rápidos</h1>
    <a href=\"{{ path(\"app_resultados_clases\") }}\">
        <span><i class=\"icofont-shield\"></i> Clases</span> 
    </a>
    
    <a href=\"{{ path(\"app_resultados_subclases\") }}\">
        <span><i class=\"icofont-duotone icofont-shield\"></i> Subclases</span> 
    </a>
    
    <a href=\"{{ path(\"app_resultados_razas\") }}\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span> 
    </a>
    
     <a href=\"{{ path(\"app_resultados_subrazas\") }}\">
        <span><i class=\"icofont-user\"></i> Subrazas</span> 
    </a>
    
    <a href=\"{{ path(\"app_resultados_trasfondos\") }}\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span> 
    </a>
    
     <a href=\"{{ path(\"app_resultados_dotes\") }}\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span> 
    </a>
    
     <a href=\"{{ path(\"app_resultados_hechizos\") }}\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span> 
    </a>
    
</div>
{% endblock %}
", "index/index.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\index\\index.html.twig");
    }
}
