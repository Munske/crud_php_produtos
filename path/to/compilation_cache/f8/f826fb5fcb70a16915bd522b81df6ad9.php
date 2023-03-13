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

/* texto.html */
class __TwigTemplate_c1d140a72716caca1f31ef32872ee50d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Texto</title>
</head>
<body>
    <a href=\"http://localhost/my/prova_pratica_php/produtos\">Exercício 1 - CRUD</a>
    <h3>Exercício 2 - Algoritimo</h3>
    
    <br>
    <form action=\"http://localhost/my/prova_pratica_php/texto/verificarTexto\" method=\"post\">
        <div>
            <p>Digite uma frase qualquer abaixo:</p>
            <textarea name=\"texto\" id=\"texto\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        <div>
            <button>Verificar Texto</button>
        </div>
    </form>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "texto.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "texto.html", "C:\\xampp\\htdocs\\my\\prova_pratica_php\\App\\View\\texto.html");
    }
}
