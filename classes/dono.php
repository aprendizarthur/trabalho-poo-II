<?php
declare(strict_types=1);
namespace classes;

//classe para o dono do animal
class Dono{
    private string $nome;
    private string $cpf;
    private array $animaisAtendidos = [];

    //trait para logs
    use \traits\logavel;

    //método construtor
    public function __construct(string $nome, string $cpf){
        $this->nome = $nome;
        $this->cpf = $cpf;

        $mensagem = "Dono de animal ".$this->nome." criado.";
        $this->adicionarLog($mensagem);
    }

    //método que adiciona animal atendido 
    public function novoAnimalAtendido(Cachorro $cachorro) : void{
        $this->animaisAtendidos[] = $cachorro;
        
        $mensagem = $this->nome." teve seu cachorro ".$cachorro->getNome()." atendido.";
        $this->adicionarLog($mensagem);
    }

    //método getter retornando nome
    public function getNome() : string{
        return $this->nome;
    }

    //método getter retornando cpf
    public function getCPF() : string{
        return $this->cpf;
    }

    //método getter retornando animais deste dono que foram atendidos
    public function getAnimaisAtendidos() : array{
        return $this->animaisAtendidos;
    }
}