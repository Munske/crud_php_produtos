<?php

    namespace App\Model;
    use App\lib\Database\Connection;

    class ProdutosDao{

        private $id;
        private $descricao;
        private $quantidade;
        private $valor;

        public function consultarTodosProdutos(){
            try{
                $conn = Connection::getConn();
                $sql = 'SELECT * FROM tb_produtos';
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (\Exception $e){
                throw new \Exception('Sistema fora do ar');
            }
        }

        public function consultarProdutoId(){
            try{
                $conn = Connection::getConn();
                $sql = "SELECT * FROM tb_produtos WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $this->id);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (\Exception $e){
                throw new \Exception('Sistema fora do ar');
            }
        }

        public function consultarProdutoFiltro(){
            try{
                $conn = Connection::getConn();
                $sql = "SELECT * FROM tb_produtos WHERE id = :id 
                OR descricao = :descricao
                OR quantidade = :quantidade
                OR valor = :valor";

                $descricaoLike = '%'.$this->descricao.'%';
                $valorLike ='%'.$this->valor.'%';

                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $this->id);
                $stmt->bindParam(':descricao', $this->descricao);
                $stmt->bindValue(':quantidade', $this->quantidade);
                $stmt->bindParam(':valor', $this->valor);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (\Exception $e){
                throw new \Exception('Sistema fora do ar');
            }
        }

        public function deletarProdutoBanco(){
            try{
                $conn = Connection::getConn();
                $sql = 'DELETE FROM tb_produtos WHERE id = :id';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $this->id);
                $stmt->execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (\Exception $e){
                throw new \Exception('Sistema fora do ar');
            }
        }

        public function cadastrarProdutoBanco(){
            if($this->descricao == '' || $this->descricao == null || 
                $this->quantidade == '' || $this->quantidade == null ||
                 $this->valor == '' || $this->valor == null){
                throw new \Exception('Preencha todos os campos');
            } else {
                try{
                    $conn = Connection::getConn();
                    $sql = "SELECT * FROM tb_produtos WHERE id = :id";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindValue(':id', $this->id);
                    $stmt->execute();
                }catch (\Exception $e){
                    throw new \Exception('Sistema fora do ar');
                }
            }
            if ($stmt->rowCount() == 0) {
                try{
                   $sql = "INSERT INTO tb_produtos (descricao, quantidade, valor) 
                    VALUES (:descricao, :quantidade, :valor);";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindValue(':descricao', $this->descricao);
                    $stmt->bindValue(':quantidade', $this->quantidade);
                    $stmt->bindValue(':valor', $this->valor);
                    $stmt->execute();
                    $_SESSION['msg_warning'] = array('msg' => "Resgistrado com Sucesso", 'count' => 0);
                    return true;
                } catch (\Exception $e){
                    throw new \Exception('Erro ao cadastrar novo Produto');
                }
            }
        }

        public function editarProdutoBanco(){
            if($this->descricao == '' || $this->descricao == null || 
                $this->quantidade == '' || $this->quantidade == null ||
                 $this->valor == '' || $this->valor == null){
                throw new \Exception('Preencha todos os campos');
            } else {
                try{
                    $conn = Connection::getConn();
                    $sql = "SELECT * FROM tb_produtos WHERE id = :id";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindValue(':id', $this->id);
                    $stmt->execute();
                }catch (\Exception $e){
                    throw new \Exception('Sistema fora do ar');
                }
            }
            if ($stmt->rowCount()) {
                try{
                   $sql = "UPDATE tb_produtos SET descricao = :descricao, quantidade = :quantidade, valor = :valor
                    WHERE id = :id";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindValue(':id', $this->id);
                    $stmt->bindValue(':descricao', $this->descricao);
                    $stmt->bindValue(':quantidade', $this->quantidade);
                    $stmt->bindValue(':valor', $this->valor);
                    $stmt->execute();
                    $_SESSION['msg_warning'] = array('msg' => "Atualizado com Sucesso", 'count' => 0);
                    return true;
                } catch (\Exception $e){
                    throw new \Exception('Erro ao editar Produto Existente');
                }
            }
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        
        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }

        public function getValor(){
            return $this->valor;
        }
        public function setValor($valor){
            $this->valor = $valor;
        }

    }
