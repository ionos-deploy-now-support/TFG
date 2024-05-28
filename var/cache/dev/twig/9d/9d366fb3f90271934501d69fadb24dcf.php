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

/* buscador/formularios/trasfondos.html.twig */
class __TwigTemplate_dcced08eb8efb3375b0fd0efb4f27f41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/formularios/trasfondos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "buscador/formularios/trasfondos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "buscador/formularios/trasfondos.html.twig", 1);
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
<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Trasfondos</h1>
 ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo " 
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "Nombre", [], "any", false, false, false, 12), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Idiomas", [], "any", false, false, false, 16), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "ObjetosIniciales", [], "any", false, false, false, 21), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Competencias", [], "any", false, false, false, 25), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Plano", [], "any", false, false, false, 30), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Autor", [], "any", false, false, false, 34), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "Origen", [], "any", false, false, false, 39), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Enviar", [], "any", false, false, false, 43), 'row');
        echo "
        </div>
    </div>
 ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
    
    </div>
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
        return "buscador/formularios/trasfondos.html.twig";
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
        return array (  138 => 46,  132 => 43,  125 => 39,  117 => 34,  110 => 30,  102 => 25,  95 => 21,  87 => 16,  80 => 12,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Trasfondos</h1>
 {{ form_start(form) }} 
    <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Nombre) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Idiomas) }}
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.ObjetosIniciales) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Competencias) }}
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Plano) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Autor) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Origen) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            {{ form_row(form.Enviar) }}
        </div>
    </div>
 {{form_end(form)}}
    
    </div>
 </div>

{% endblock %}", "buscador/formularios/trasfondos.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\buscador\\formularios\\trasfondos.html.twig");
    }
}