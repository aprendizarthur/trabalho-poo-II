<?php
declare(strict_types=1);
namespace classes;

use \interfaces\atendivel;

//classe para cachorros que é filha da classe Animal e implementa a interface Atendivel  (métodos obrigatórios)
class Cachorro extends Animal implements Atendivel{
    private string $raca; 
    private bool $disponivel;

    //trait para logs
    use \traits\logavel;
    //trait para exibir dados do cachorro
    use \traits\informavel;

    public function __construct(string $nome, string $especie, int $idade, string $raca){
        parent::__construct($nome, $especie, $idade);
        $this->raca = $raca;
        $this->disponivel = true;
        $mensagem = "Cachorro ".$this->nome." da raça ".$this->raca." criado.";
        $this->adicionarLog($mensagem);
    }

     //método interface para atender animal
    public function atender() : void{  
        $this->disponivel = false;
    }

    //método interface para finalizar atendimento animal
    public function finalizarAtendimento() : void{  
        $this->disponivel = true;
    }

    //getter retornando disponibilidade do cachorro
    public function getDisponibilidade() : bool{
        return $this->disponivel;
    }

    //getter retornando raça
    public function getRaca() : string{
        return $this->raca;
    }
}