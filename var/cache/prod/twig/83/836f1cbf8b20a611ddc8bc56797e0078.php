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
class __TwigTemplate_fb41e55b5291d5da652036fef7d2b35c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "revisiones/index.html.twig", 1);
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
        echo "<div class=\"indices\">
    <h1>Accesos Rápidos</h1>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_clase");
        echo "\">
        <span><i class=\"icofont-shield\"></i> Clases</span> (";
        // line 9
        echo twig_escape_filter($this->env, ($context["clases"] ?? null), "html", null, true);
        echo ")
    </a>
    
    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_subclase");
        echo "\">
        <span><i class=\"icofont-duotone icofont-shield\"></i> Subclases</span> (";
        // line 13
        echo twig_escape_filter($this->env, ($context["subclases"] ?? null), "html", null, true);
        echo ")
    </a>
    
    <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_raza");
        echo "\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span> (";
        // line 17
        echo twig_escape_filter($this->env, ($context["razas"] ?? null), "html", null, true);
        echo ")
    </a>
    
     <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_subraza");
        echo "\">
        <span><i class=\"icofont-user\"></i> Subrazas</span> (";
        // line 21
        echo twig_escape_filter($this->env, ($context["subrazas"] ?? null), "html", null, true);
        echo ")
    </a>
    
    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_trasfondo");
        echo "\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span> (";
        // line 25
        echo twig_escape_filter($this->env, ($context["trasfondos"] ?? null), "html", null, true);
        echo ")
    </a>
    
     <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_dote");
        echo "\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span> (";
        // line 29
        echo twig_escape_filter($this->env, ($context["dotes"] ?? null), "html", null, true);
        echo ")
    </a>
    
     <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones_hechizo");
        echo "\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span> (";
        // line 33
        echo twig_escape_filter($this->env, ($context["hechizos"] ?? null), "html", null, true);
        echo ")
    </a>
    
</div>
";
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
        return array (  126 => 33,  122 => 32,  116 => 29,  112 => 28,  106 => 25,  102 => 24,  96 => 21,  92 => 20,  86 => 17,  82 => 16,  76 => 13,  72 => 12,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revisiones/index.html.twig", "E:\\TFG\\templates\\revisiones\\index.html.twig");
    }
}
