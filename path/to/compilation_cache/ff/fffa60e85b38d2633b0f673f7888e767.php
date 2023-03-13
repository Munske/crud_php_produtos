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

/* exibeProdutos.html */
class __TwigTemplate_1703292d6db87fad0958b86b17293056 extends Template
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
        <a href=\"http://localhost/my/prova_pratica_php/texto\">Exercício 2 - Algoritimo</a>
        <h3>Exercício 1 - CRUD</h3>
        <h4>Listagem Produtos</h4>
        <form action=\"http://localhost/my/prova_pratica_php/produtos/consultarProduto\" method=\"post\">
            <div>
                <label for=\"id\">Id</label><br>
                <input type=\"number\" id=\"id\" name=\"id\"><br>
            </div>
            <div>
                <label for=\"descricao\">Descrição</label><br>
                <input type=\"text\" id=\"descricao\" name=\"descricao\">
            </div>
            <div>
                <label for=\"quantidade\">quantidade</label><br>
                <input type=\"number\" id=\"quantidade\" name=\"quantidade\">
            </div>
            <div>
                <label for=\"valor\">Valor</label><br>
                <input type=\"number\"  step=\"any\" id=\"valor\" name=\"valor\">
            </div>
            <div>
                <br>
                <button>Consultar Produto</button>
                |
                <a href=\"http://localhost/my/prova_pratica_php/produtos\">Consultar Todos</a>
                |
                <a href=\"http://localhost/my/prova_pratica_php/produtos/cadastrarProduto\">Cadastrar Novo</a>
                <p>Resultados encontrados: ";
        // line 40
        echo twig_escape_filter($this->env, ($context["tamanhoConsulta"] ?? null), "html", null, true);
        echo "</p>
            </div>
            ";
        // line 42
        if ((($context["msg"] ?? null) != "")) {
            // line 43
            echo "            <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "msg", [], "any", false, false, false, 43), "html", null, true);
            echo " <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></h3>
            ";
        }
        // line 45
        echo "        </form>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>quantidade</th>
                    <th>Valor</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produtos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 59
            echo "                <tr>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "descricao", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "quantidade", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "valor", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td><a href=\"http://localhost/my/prova_pratica_php/produtos/editarProduto/";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\"><i>Editar</i></a></td>
                    <td><a href=\"http://localhost/my/prova_pratica_php/produtos/deletarProduto/";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\"><i>Deletar</i></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tbody>
        </table>
    </main>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "exibeProdutos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  133 => 65,  129 => 64,  125 => 63,  121 => 62,  117 => 61,  113 => 60,  110 => 59,  106 => 58,  91 => 45,  85 => 43,  83 => 42,  78 => 40,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "exibeProdutos.html", "C:\\xampp\\htdocs\\my\\prova_pratica_php\\App\\View\\exibeProdutos.html");
    }
}
