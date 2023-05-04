<?php
    namespace MODEL;
    class Operador {
        private int $id;
        private string $nome;
        private string $aniversario;
        private float $salario;

        public function  __construct()
        {
            
        } 
        public function getId() {
            return self::$id;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getName() {
            return self::$nome;
        }

        public function setName(string $nome) {
            $this->nome = $nome;
        }

        public function getAni() {
            return self::$aniversario;
        }

        public function setAni(string $aniversario) {
            $this->aniversario = $aniversario;
        }

        public function getSal() {
            return self::$salario;
        }

        public function setSal($salario) {
            $this->salario = $salario;
        }


    }
?>