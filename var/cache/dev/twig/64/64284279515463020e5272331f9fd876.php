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

/* solicitudes/habilidades_subclase.html.twig */
class __TwigTemplate_10b9413c48180234f5101dbc6750bc89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitudes/habilidades_subclase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitudes/habilidades_subclase.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/habilidades_subclase.html.twig", 1);
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
        echo "<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de subclase</h1>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo " 
    <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "Nombre", [], "any", false, false, false, 13), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "Descripcion", [], "any", false, false, false, 18), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "OrigenNivel", [], "any", false, false, false, 23), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "Nombre2", [], "any", false, false, false, 29), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Descripcion2", [], "any", false, false, false, 34), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "OrigenNivel2", [], "any", false, false, false, 39), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "Nombre3", [], "any", false, false, false, 45), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "Descripcion3", [], "any", false, false, false, 50), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "OrigenNivel3", [], "any", false, false, false, 55), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Nombre4", [], "any", false, false, false, 61), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "Descripcion4", [], "any", false, false, false, 66), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "OrigenNivel4", [], "any", false, false, false, 71), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "Nombre5", [], "any", false, false, false, 77), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "Descripcion5", [], "any", false, false, false, 82), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "OrigenNivel5", [], "any", false, false, false, 87), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "Enviar", [], "any", false, false, false, 96), 'row');
        echo "
        </div>
    </div>
 ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
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
        return "solicitudes/habilidades_subclase.html.twig";
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
        return array (  234 => 99,  228 => 96,  216 => 87,  208 => 82,  200 => 77,  191 => 71,  183 => 66,  175 => 61,  166 => 55,  158 => 50,  150 => 45,  141 => 39,  133 => 34,  125 => 29,  116 => 23,  108 => 18,  100 => 13,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BuscadorController!{% endblock %}

{% block body %}
<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de subclase</h1>
    {{ form_start(form) }} 
    <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            {{ form_widget(form.Nombre) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            {{ form_widget(form.Descripcion) }}
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            {{ form_widget(form.OrigenNivel) }}
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            {{ form_widget(form.Nombre2) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            {{ form_widget(form.Descripcion2) }}
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            {{ form_widget(form.OrigenNivel2) }}
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            {{ form_widget(form.Nombre3) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            {{ form_widget(form.Descripcion3) }}
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            {{ form_widget(form.OrigenNivel3) }}
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            {{ form_widget(form.Nombre4) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            {{ form_widget(form.Descripcion4) }}
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            {{ form_widget(form.OrigenNivel4) }}
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            {{ form_widget(form.Nombre5) }}
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            {{ form_widget(form.Descripcion5) }}
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            {{ form_widget(form.OrigenNivel5) }}
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
   

{% endblock %}", "solicitudes/habilidades_subclase.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\solicitudes\\habilidades_subclase.html.twig");
    }
}
