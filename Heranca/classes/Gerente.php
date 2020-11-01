<?php

namespace Classes;


class Gerente extends Funcionario
{

        private $projeto;

        public function __construct($cpf, $nome, $idade, $salario, $projeto)
        {
                parent::__construct($cpf, $nome, $idade, $salario);
                $this->projeto = $projeto;
        }


        /**
         * Get the value of cpf
         */ 
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */ 
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of idade
         */ 
        public function getIdade()
        {
                return $this->idade;
        }

        /**
         * Set the value of idade
         *
         * @return  self
         */ 
        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        /**
         * Get the value of salario
         */ 
        public function getSalario()
        {
                return $this->salario;
        }

        /**
         * Set the value of salario
         *
         * @return  self
         */ 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }

        /**
         * Get the value of projeto
         */ 
        public function getProjeto()
        {
                return $this->projeto;
        }

        /**
         * Set the value of projeto
         *
         * @return  self
         */ 
        public function setProjeto($projeto)
        {
                $this->projeto = $projeto;

                return $this;
        }
}
