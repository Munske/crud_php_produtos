<?php 

namespace App\Core;

use App\Controller\ProdutosController;

class Core{

private $url;
private $controller;
private $method = "index";
private $params = array();

private $msg;

public function __construct()
{
    $this->msg = $_SESSION['msg_warning'] ?? null;

    if(isset($this->msg)){
        if($this->msg['count'] === 0){
            $_SESSION['msg_warning']['count']++;
        } else {
            unset($_SESSION['msg_warning']);
        }
    }
}

public function start($request){
    //Ordem de requisição (Controller/method/parametros../..)
    if(isset($request['url'])){
        //explode quebra a / e apartir dele transforma em um array
        $this->url = explode('/', $request['url']);
        $this->controller = "App\Controller\\".ucfirst($this->url[0]).'Controller';
        
        /* array_shift apagará a posição[0] que esta na variável url */
        array_shift($this->url);

        if(isset($this->url[0]) && $this->url != ''){
            $this->method = $this->url[0];
            array_shift($this->url);
            if(isset($this->url[0]) && $this->url != ''){
                $this->params = $this->url;
            } else {
                $this->params = $request;
            }
        }
        
    }
        if(!isset($this->controller)){
            $this->controller = new ProdutosController;
            $this->method = 'index';
        }
        // //Retorno de um controlador com metodo e também parametros caso houver...
        return call_user_func(array(new $this->controller, $this->method), $this->params);
    } 
}
