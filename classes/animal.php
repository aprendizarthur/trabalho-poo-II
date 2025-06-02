<?php
declare(strict_types=1);
namespace classes;

//classe abstrata que define propriedades que toda subclasse que herdar animal deve ter
abstract class Animal{
    protected string $nome;
    protected string $especie;
    protected int $idade;

    public function __construct(string $nome, string $especie, int $idade){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
    }

     //getter retornando nome
    public function getNome() : string{
        return $this->nome;
    }

    //getter retornando espécie
    public function getEspecie() : string{
        return $this->especie;
    }

    //getter retornando idade
    public function getIdade() : int{
        return $this->idade;
    }
}