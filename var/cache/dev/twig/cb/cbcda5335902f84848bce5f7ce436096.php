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

/* solicitudes/habilidades_clase.html.twig */
class __TwigTemplate_a5f6c19791c630d1d5fa66d949d21f77 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitudes/habilidades_clase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitudes/habilidades_clase.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/habilidades_clase.html.twig", 1);
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
        echo "
<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de clase</h1>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo " 
    <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "Nombre", [], "any", false, false, false, 14), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "Descripcion", [], "any", false, false, false, 19), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "OrigenNivel", [], "any", false, false, false, 24), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "Nombre2", [], "any", false, false, false, 30), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Descripcion2", [], "any", false, false, false, 35), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "OrigenNivel2", [], "any", false, false, false, 40), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "Nombre3", [], "any", false, false, false, 46), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "Descripcion3", [], "any", false, false, false, 51), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "OrigenNivel3", [], "any", false, false, false, 56), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Nombre4", [], "any", false, false, false, 62), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "Descripcion4", [], "any", false, false, false, 67), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "OrigenNivel4", [], "any", false, false, false, 72), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "Nombre5", [], "any", false, false, false, 78), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "Descripcion5", [], "any", false, false, false, 83), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "OrigenNivel5", [], "any", false, false, false, 88), 'widget');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "Enviar", [], "any", false, false, false, 97), 'row');
        echo "
        </div>
    </div>
 ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
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
        return "solicitudes/habilidades_clase.html.twig";
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
        return array (  235 => 100,  229 => 97,  217 => 88,  209 => 83,  201 => 78,  192 => 72,  184 => 67,  176 => 62,  167 => 56,  159 => 51,  151 => 46,  142 => 40,  134 => 35,  126 => 30,  117 => 24,  109 => 19,  101 => 14,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BuscadorController!{% endblock %}

{% block body %}

<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de clase</h1>
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
 


{% endblock %}", "solicitudes/habilidades_clase.html.twig", "C:\\xampp\\htdocs\\TFG\\templates\\solicitudes\\habilidades_clase.html.twig");
    }
}
