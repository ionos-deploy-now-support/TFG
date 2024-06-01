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
class __TwigTemplate_c24248b4c8f2d4a588af444dd505f764 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/habilidades_subclase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello BuscadorController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de subclase</h1>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo " 
    <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nombre", [], "any", false, false, false, 13), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion", [], "any", false, false, false, 18), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel", [], "any", false, false, false, 23), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nombre2", [], "any", false, false, false, 29), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion2", [], "any", false, false, false, 34), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel2", [], "any", false, false, false, 39), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nombre3", [], "any", false, false, false, 45), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion3", [], "any", false, false, false, 50), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel3", [], "any", false, false, false, 55), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nombre4", [], "any", false, false, false, 61), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion4", [], "any", false, false, false, 66), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel4", [], "any", false, false, false, 71), 'widget');
        echo "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Nombre5", [], "any", false, false, false, 77), 'widget');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion5", [], "any", false, false, false, 82), 'widget');
        echo "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel5", [], "any", false, false, false, 87), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Enviar", [], "any", false, false, false, 96), 'row');
        echo "
        </div>
    </div>
 ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    
    </div>
 </div>
   

";
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
        return array (  204 => 99,  198 => 96,  186 => 87,  178 => 82,  170 => 77,  161 => 71,  153 => 66,  145 => 61,  136 => 55,  128 => 50,  120 => 45,  111 => 39,  103 => 34,  95 => 29,  86 => 23,  78 => 18,  70 => 13,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "solicitudes/habilidades_subclase.html.twig", "E:\\TFG\\templates\\solicitudes\\habilidades_subclase.html.twig");
    }
}
