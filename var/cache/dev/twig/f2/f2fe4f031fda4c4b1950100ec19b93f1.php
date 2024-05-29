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

/* solicitudes/razas.html.twig */
class __TwigTemplate_5786524cee8b6db51ae52fecc81655b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitudes/razas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitudes/razas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/razas.html.twig", 1);
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
<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Solicitudes de Razas</h1>
 ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo " 
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "Nombre", [], "any", false, false, false, 11), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Descripcion", [], "any", false, false, false, 15), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Fuerza", [], "any", false, false, false, 20), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "Destreza", [], "any", false, false, false, 24), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Constitucion", [], "any", false, false, false, 29), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "Inteligencia", [], "any", false, false, false, 33), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "Sabiduria", [], "any", false, false, false, 38), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "Carisma", [], "any", false, false, false, 42), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "Velocidad", [], "any", false, false, false, 47), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "AtaqueDesarmado", [], "any", false, false, false, 51), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
           ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "img", [], "any", false, false, false, 56), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "Autor", [], "any", false, false, false, 60), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "Enviar", [], "any", false, false, false, 68), 'row');
        echo "
        </div>
    </div>
 ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
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
        return "solicitudes/razas.html.twig";
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
        return array (  179 => 71,  173 => 68,  162 => 60,  155 => 56,  147 => 51,  140 => 47,  132 => 42,  125 => 38,  117 => 33,  110 => 29,  102 => 24,  95 => 20,  87 => 15,  80 => 11,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Solicitudes de Razas</h1>
 {{ form_start(form) }} 
    <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Nombre) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Descripcion) }}
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Fuerza) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Destreza) }}
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Constitucion) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Inteligencia) }}
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Sabiduria) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Carisma) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            {{ form_row(form.Velocidad) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.AtaqueDesarmado) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
           {{ form_row(form.img) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            {{ form_row(form.Autor) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            {{ form_row(form.Enviar) }}
        </div>
    </div>
 {{form_end(form)}}
    
    </div>
 </div>

 {% endblock %}
", "solicitudes/razas.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\solicitudes\\razas.html.twig");
    }
}
