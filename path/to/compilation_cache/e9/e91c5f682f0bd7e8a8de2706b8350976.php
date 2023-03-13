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

/* cadastrarProdutos.html */
class __TwigTemplate_6a1f5bcbf5c725635eff64b9255ea21e extends Template
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
    <title>produtos</title>
</head>

<body>
    <main>
        <h3>Cadastro</h3>
        <form action=\"http://localhost/my/crud_php_produtos/produtos/cadastrarProduto\" method=\"post\">
            <div>
                <label for=\"descricao\">Descrição</label><br>
                <input type=\"text\" id=\"descricao\" name=\"descricao\" required>
            </div>
            <div>
                <label for=\"quantidade\">quantidade</label><br>
                <input type=\"number\" id=\"quantidade\" name=\"quantidade\" required>
            </div>
            <div>
                <label for=\"valor\">Valor</label><br>
                <input type=\"number\" step=\"any\" id=\"valor\" name=\"valor\" required>
            </div>
            <div>
                <br>
                <button>Cadastrar</button>
                <br><br>
                <a href=\"http://localhost/my/crud_php_produtos/produtos\">Voltar</a>
                
            </div>
            ";
        // line 34
        if ((($context["msg"] ?? null) != "")) {
            // line 35
            echo "            <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "msg", [], "any", false, false, false, 35), "html", null, true);
            echo " <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></h3>
            ";
        }
        // line 37
        echo "        </form>
    </main>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "cadastrarProdutos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 37,  74 => 35,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cadastrarProdutos.html", "C:\\xampp\\htdocs\\my\\crud_php_produtos\\App\\View\\cadastrarProdutos.html");
    }
}
