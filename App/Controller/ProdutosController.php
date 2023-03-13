<?php

    namespace App\Controller;

    use App\Model\ProdutosDao;

    class ProdutosController
    {

    private $method = "renderiza";
    private $pageDefault = "exibeProdutos";

    public function index()
    {
        try {
            $produtos = new ProdutosDao;
            $result = $produtos->consultarTodosProdutos();
       
            return call_user_func(array(new ProdutosController, $this->method), $this->pageDefault, $result);
        } catch (\Exception $e) {
            $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/my/crud_php_produtos/');
        }
    }

    public function consultarProduto(){
        try{
            $produtos = new ProdutosDao;
            if(sizeof($_POST)!=0){
                $produtos->setId($_POST['id']);
                $produtos->setDescricao($_POST['descricao']);
                $produtos->setQuantidade($_POST['quantidade']);
                $produtos->setValor($_POST['valor']);
                $result = $produtos->consultarProdutoFiltro();
                
                return call_user_func(array(new ProdutosController, $this->method), $this->pageDefault, $result);
            }
        } catch (\Exception $e){
            $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/my/crud_php_produtos/');
        }
    }

    public function cadastrarProduto(){
        try{
            $page = "cadastrarProdutos";
            $result = "";
            if($_POST){
                $produtos = new ProdutosDao;
                $produtos->setDescricao($_POST['descricao']);
                $produtos->setQuantidade($_POST['quantidade']);
                $produtos->setValor($_POST['valor']);
                $result = $produtos->cadastrarProdutoBanco();
            }

            return call_user_func(array(new ProdutosController, $this->method), $page, $result);       

        } catch (\Exception $e){
            $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/my/crud_php_produtos/cadastrarProduto');
        }     
    }

    public function editarProduto($param){

        try{
            $page = "editarProdutos";
            $produtos = new ProdutosDao;
            if($_POST){
                $produtos->setId($_POST['id']);
                $produtos->setDescricao($_POST['descricao']);
                $produtos->setQuantidade($_POST['quantidade']);
                $produtos->setValor($_POST['valor']);
                $produtos->editarProdutoBanco(); 
                $result = $produtos->consultarProdutoId();
            } else {
                $produtos->setId($param[0]);
                $result = $produtos->consultarProdutoId();
            }
            return call_user_func(array(new ProdutosController, $this->method), $page, $result);
            
        } catch (\Exception $e){
            $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/my/crud_php_produtos/abrirEdicao');
        }    
    }

    public function deletarProduto($param)
    {
        try{
            $produtos = new ProdutosDao;
            $produtos->setId($param[0]);
            $result = $produtos->deletarProdutoBanco();
            $result = $produtos->consultarTodosProdutos();

            return call_user_func(array(new ProdutosController, $this->method), $this->pageDefault, $result);
        
        } catch (\Exception $e){
            $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/my/crud_php_produtos/');
        }
    }

    public function renderiza($page,$param)
    {
        try{
            //Utilizando a dependência Twig para renderizar o template com parâmetros mais facilmente...
            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader, [
                'cache' => 'path/to/compilation_cache',
                'auto_reload' => true
            ]);
            $template = $twig->load($page.'.html');
            $parameters['msg'] = $_SESSION['msg_warning'] ?? null;
            $parameters['produtos'] = $param;
            if($page == $this->pageDefault){
                $parameters['tamanhoConsulta'] = sizeof($param);
            }
            return $template->render($parameters);
        
        } catch (\Exception $e){
            $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
            header('Location: http://localhost/my/crud_php_produtos/');
        }
    }
}
