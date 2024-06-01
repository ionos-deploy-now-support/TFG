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
class __TwigTemplate_8aec3a9d3654cce8ae7bd39ff1e8244e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  111 => 35,  104 => 31,  97 => 27,  90 => 23,  83 => 19,  76 => 15,  69 => 11,  64 => 8,  60 => 7,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/index.html.twig", "E:\\TFG\\templates\\index\\index.html.twig");
    }
}
