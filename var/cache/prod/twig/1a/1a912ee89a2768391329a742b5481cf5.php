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

/* buscador/mostrar/hechizos.html.twig */
class __TwigTemplate_02ca82cbe97d43d051bc30b6a21892bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/mostrar/hechizos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bodygrid.css"), "html", null, true);
        echo "\">
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <div class=\"grid-body\">
        <div class=\"L1\"></div>
        <div class=\"L2\"></div>
        <div class=\"DC\">
            <div class='grid-subclase'>
                <span class=\"V1\"> </span>
                <h1 class=\"N\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "nombre", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                <span class=\"V2\"> </span>
                <div class=\"R\">Nivel: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Nivel", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
                <div class=\"I\" ><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "img", [], "any", false, false, false, 16), "html", null, true);
        echo "\"/></div>
            </div>
        </div>
        <div class=\"TP\">
            <h1>Datos técnicos del hechizo</h1>
            <table class=\"Progreso\">
                <tr>
                    <td><b>Escuela</b></td>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Escuela", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Componentes</b></td>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Componentes", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Alcance</b></td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Rango", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Área de efecto</b></td>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "ZonaEfecto", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Tiempo de Ejecución</b></td>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "TiempoDeEjecucion", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td><b>Duración</b></td>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Duracion", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
        <div class=\"RC\">
            <h1>Beneficios</h1>
            <div class=\"grid-rasgos\">
                <span class=\"N\"><b>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Nombre", [], "any", false, false, false, 51), "html", null, true);
        echo "</b></span>
                <span class=\"V1\"></span>
                <span class=\"L\"><b>Nivel: ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Nivel", [], "any", false, false, false, 53), "html", null, true);
        echo "</b></span>
                <span class=\"D\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["hechizo"] ?? null), "Descripcion", [], "any", false, false, false, 54), "html", null, true);
        echo "</span> 
            </div>
        </div>
        <div class=\"SU\"></div>
    </div>
    
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/mostrar/hechizos.html.twig";
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
        return array (  148 => 54,  144 => 53,  139 => 51,  129 => 44,  122 => 40,  115 => 36,  108 => 32,  101 => 28,  94 => 24,  83 => 16,  79 => 15,  74 => 13,  66 => 7,  62 => 6,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/mostrar/hechizos.html.twig", "E:\\TFG\\templates\\buscador\\mostrar\\hechizos.html.twig");
    }
}
