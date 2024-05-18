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
class __TwigTemplate_87dd2619302e06a8012137ff2a00ea4f extends Template
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_clase");
        echo "\">
        <span>Clases</span>
    </a>
    (";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["clases"]) || array_key_exists("clases", $context) ? $context["clases"] : (function () { throw new RuntimeError('Variable "clases" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ")
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_subclase");
        echo "\">
        <span>Subclases</span>
    </a>
    (";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["subclases"]) || array_key_exists("subclases", $context) ? $context["subclases"] : (function () { throw new RuntimeError('Variable "subclases" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ")
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_raza");
        echo "\">
        <span>Razas</span>
    </a>
    (";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["razas"]) || array_key_exists("razas", $context) ? $context["razas"] : (function () { throw new RuntimeError('Variable "razas" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ")
     <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_subraza");
        echo "\">
        <span>Subrazas</span>
    </a>
    (";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["subrazas"]) || array_key_exists("subrazas", $context) ? $context["subrazas"] : (function () { throw new RuntimeError('Variable "subrazas" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ")
    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_trasfondo");
        echo "\">
        <span>Trasfondos</span>
    </a>
    (";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["trasfondos"]) || array_key_exists("trasfondos", $context) ? $context["trasfondos"] : (function () { throw new RuntimeError('Variable "trasfondos" does not exist.', 30, $this->source); })()), "html", null, true);
        echo ")
     <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_dote");
        echo "\">
        <span>Dotes</span>
    </a>
    (";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["dotes"]) || array_key_exists("dotes", $context) ? $context["dotes"] : (function () { throw new RuntimeError('Variable "dotes" does not exist.', 34, $this->source); })()), "html", null, true);
        echo ")
     <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_hechizo");
        echo "\">
        <span>Hechizos</span>
    </a>
    (";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["hechizos"]) || array_key_exists("hechizos", $context) ? $context["hechizos"] : (function () { throw new RuntimeError('Variable "hechizos" does not exist.', 38, $this->source); })()), "html", null, true);
        echo ")
</div>
<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>C:/Users/alopa/OneDrive/Escritorio/xampp2/htdocs/Symfony/TFG/src/Controller/BuscadorController.php</code></li>
        <li>Your template at <code>C:/Users/alopa/OneDrive/Escritorio/xampp2/htdocs/Symfony/TFG/templates/buscador/index.html.twig</code></li>
    </ul>
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
        return array (  167 => 41,  161 => 38,  155 => 35,  151 => 34,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  125 => 23,  121 => 22,  115 => 19,  111 => 18,  105 => 15,  101 => 14,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <a href=\"{{ path(\"app_revisiones_clase\") }}\">
        <span>Clases</span>
    </a>
    ({{clases}})
    <a href=\"{{ path(\"app_revisiones_subclase\") }}\">
        <span>Subclases</span>
    </a>
    ({{subclases}})
    <a href=\"{{ path(\"app_revisiones_raza\") }}\">
        <span>Razas</span>
    </a>
    ({{razas}})
     <a href=\"{{ path(\"app_revisiones_subraza\") }}\">
        <span>Subrazas</span>
    </a>
    ({{subrazas}})
    <a href=\"{{ path(\"app_revisiones_trasfondo\") }}\">
        <span>Trasfondos</span>
    </a>
    ({{trasfondos}})
     <a href=\"{{ path(\"app_revisiones_dote\") }}\">
        <span>Dotes</span>
    </a>
    ({{dotes}})
     <a href=\"{{ path(\"app_revisiones_hechizo\") }}\">
        <span>Hechizos</span>
    </a>
    ({{hechizos}})
</div>
<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>C:/Users/alopa/OneDrive/Escritorio/xampp2/htdocs/Symfony/TFG/src/Controller/BuscadorController.php</code></li>
        <li>Your template at <code>C:/Users/alopa/OneDrive/Escritorio/xampp2/htdocs/Symfony/TFG/templates/buscador/index.html.twig</code></li>
    </ul>
</div>
{% endblock %}", "revisiones/index.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\revisiones\\index.html.twig");
    }
}
