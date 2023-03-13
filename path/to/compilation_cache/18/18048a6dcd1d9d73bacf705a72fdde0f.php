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

/* editarProdutos.html */
class __TwigTemplate_03e934fd15f5376f1933b4fc9f834d5e extends Template
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
        <h3>Edição</h3>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produtos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
            // line 15
            echo "        <form action=\"http://localhost/my/crud_php_produtos/produtos/editarProduto/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" method=\"post\">
            <div>
                <label for=\"id\">Id - Não Editável</label><br>
                <input style=\"background-color: rgba(155, 5, 5, 0.584);\" readonly type=\"number\" id=\"id\" name=\"id\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\"><br>
            </div>
            <div>
                <label for=\"descricao\">Descrição</label><br>
                <input type=\"text\" id=\"descricao\" name=\"descricao\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "descricao", [], "any", false, false, false, 22), "html", null, true);
            echo "\" required>
            </div>
            <div>
                <label for=\"quantidade\">quantidade</label><br>
                <input type=\"number\" id=\"quantidade\" name=\"quantidade\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "quantidade", [], "any", false, false, false, 26), "html", null, true);
            echo "\" required>
            </div>
            <div>
                <label for=\"valor\">Valor</label><br>
                <input type=\"number\" step=\"any\" id=\"valor\" name=\"valor\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "valor", [], "any", false, false, false, 30), "html", null, true);
            echo "\" required>
            </div>
            <div>
                <br>
                <button>Editar</button>
                <br><br>
                <a href=\"http://localhost/my/crud_php_produtos/produtos\">Voltar</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
            ";
        // line 39
        if ((($context["msg"] ?? null) != "")) {
            // line 40
            echo "            <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["msg"] ?? null), "msg", [], "any", false, false, false, 40), "html", null, true);
            echo " <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></h3>
            ";
        }
        // line 42
        echo "        </form>
    </main>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "editarProdutos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  103 => 40,  101 => 39,  98 => 38,  84 => 30,  77 => 26,  70 => 22,  63 => 18,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editarProdutos.html", "C:\\xampp\\htdocs\\my\\crud_php_produtos\\App\\View\\editarProdutos.html");
    }
}
