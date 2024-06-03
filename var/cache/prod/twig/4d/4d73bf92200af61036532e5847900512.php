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

/* base.html.twig */
class __TwigTemplate_ccfdaf03f295a6e5b7e06fe6fe687ba9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <header>
            <ul class=\"menu\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"><li>Inicio</li></a>
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_buscador");
        echo "\"><li>Buscador</li></a>
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personaje");
        echo "\"><li>Creador de personajes</li></a>
                ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revisiones");
            echo "\"><li>Revisiones</li></a>
                    </ul>
                    <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"menu_logout\"><i class=\"icofont-logout\"></i></a>
                ";
        } else {
            // line 27
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitudes");
            echo "\"><li>Solicitudes</li></a>
                    </ul>
                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"menu_login\"><i class=\"icofont-login\"></i></a>
                ";
        }
        // line 31
        echo "        </header>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "        <footer>
            <h4>
                Contacta con nosotros por las siguientes redes sociales: 
                <a href=\"https://m.facebook.com/javieralonso.paniaguaalvarez\"><i class=\"icofont-facebook\"></i></a>
                <a href=\"https://www.instagram.com/javieralonso_paniagua/\"><i class=\"icofont-instagram\"></i></a>
                <a href=\"https://twitter.com/JavierAlonsoP1\"><i class=\"icofont-twitter\"></i></a>
                <a href=\"https://github.com/\"> <i class=\"icofont-github\"></i></a>
            </h4>
            <h4>Este proyecto está bajo la licencia de Creative Commons Share Alike</h4>
            <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">
                <img src=\"https://i.creativecommons.org/l/by-sa/4.0/88x31.png\" alt=\"Licencia de Creative Commons\">
            </a>
        </footer>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "DNDpedia";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        echo "\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
        ";
    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "            ";
        $this->displayBlock('importmap', $context, $blocks);
        // line 14
        echo "        ";
    }

    // line 13
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  163 => 32,  156 => 13,  152 => 14,  149 => 13,  145 => 12,  137 => 8,  133 => 7,  126 => 5,  107 => 33,  105 => 32,  102 => 31,  97 => 29,  91 => 27,  86 => 25,  80 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  60 => 15,  58 => 12,  55 => 11,  53 => 7,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\base.html.twig");
    }
}