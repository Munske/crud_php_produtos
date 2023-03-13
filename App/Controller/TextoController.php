<?php

    namespace App\Controller;

    use App\class\verificadorTexto;


    class TextoController
    {

        private $method = "renderiza";
        private $pageDefault = "texto";

        public function index(){
            try{
                $result = '';
                return call_user_func(array(new TextoController, $this->method), $this->pageDefault, $result);
            
            } catch (\Exception $e){
                $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
                header('Location: http://localhost/my/crud_php_produtos/texto');
            }
        }

        public function verificarTexto(){
            $verificador = new VerificadorTexto;
            $verificador->setTexto($_POST['texto']);
            $result = $verificador->resolveTexto();
            
            return call_user_func(array(new TextoController, $this->method), $this->pageDefault);
        }

        public function renderiza(){
            try{
                $loader = new \Twig\Loader\FilesystemLoader('App/View');
                $twig = new \Twig\Environment($loader, [
                'cache' => 'path/to/compilation_cache',
                'auto_reload' => true]);
                $template = $twig->load('texto.html');
                $parameters['msg'] = $_SESSION['msg_warning'] ?? null;
                return $template->render($parameters);
            
            } catch (\Exception $e) {
                $_SESSION['msg_warning'] = array('msg' => $e->getMessage(), 'count' => 0);
                header('Location: http://localhost/my/crud_php_produtos/texto');
            }
        }

    }