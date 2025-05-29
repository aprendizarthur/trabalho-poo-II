<?php
declare(strict_types=1);
namespace classes;

//classe abstrata que define propriedades que toda subclasse que herdar animal deve ter
abstract class Animal{
    protected $nome;
    protected $especie;
    protected $idade;

    public function __construct(string $nome, string $especia, int $idade){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
    }
}