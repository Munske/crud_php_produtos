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
class __TwigTemplate_f4432188c4ceb87af0808bf86884bc99 extends Template
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
        <h4>Listagem Produtos</h4>
        <form action=\"http://localhost/my/crud_php_produtos/produtos/consultarProduto\" method=\"post\">
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
                <a href=\"http://localhost/my/crud_php_produtos/produtos\">Consultar Todos</a>
                |
                <a href=\"http://localhost/my/crud_php_produtos/produtos/cadastrarProduto\">Cadastrar Novo</a>
                <p>Resultados encontrados: ";
        // line 38
        echo twig_escape_filter($this->env, ($context["tamanhoConsulta"] ?? null), "html", null, true);
        echo "</p>
            </div>
            ";
        // line 40
        if ((($context["msg"] ?? null) != "")) {
            // line 41
            echo "            <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "msg", [], "any", false, false, false, 41), "html", null, true);
            echo " <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></h3>
            ";
        }
        // line 43
        echo "        </form>
        <table border=\"2\">
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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produtos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 57
            echo "                <tr>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "descricao", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "quantidade", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "valor", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td><a href=\"http://localhost/my/crud_php_produtos/produtos/editarProduto/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 62), "html", null, true);
            echo "\"><i>Editar</i></a></td>
                    <td><a href=\"http://localhost/my/crud_php_produtos/produtos/deletarProduto/";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\"><i>Deletar</i></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return array (  140 => 66,  131 => 63,  127 => 62,  123 => 61,  119 => 60,  115 => 59,  111 => 58,  108 => 57,  104 => 56,  89 => 43,  83 => 41,  81 => 40,  76 => 38,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "exibeProdutos.html", "C:\\xampp\\htdocs\\my\\crud_php_produtos\\App\\View\\exibeProdutos.html");
    }
}
