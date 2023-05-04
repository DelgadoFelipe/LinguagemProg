<?php
    namespace DAL; 
    include_once 'C:\xampp\htdocs\lpbcct2php2023-main\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\lpbcct2php2023-main\MODEL\Operador.php';
    
    
    class dalOperador{

        public function Select(){
          $sql = "select * from operador;";

          $con = Conexao::conectar(); 
          $result = $con->query($sql); 
          $con = Conexao::desconectar();

          //RETORNO DO BANCO DE DADOS ---> return $result;
          foreach($result as $linha) {
            $operador = new \MODEL\Operador();
            
            $operador->setId($linha['id']);
            $operador->setId($linha['nome']);
            $operador->setId($linha['aniversario']);
            $operador->setId($linha['salario']);

            $lstOperador[] = $operador;
          } 
          
          //RETORNO DO OBJETO
          return $lstOperador;
        }


        public function SelectID(int $id){

        }

        public function Insert(){

        }

        public function Update(){

        }

        public function Delete(){

        }   


    }

?> 