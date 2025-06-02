<?php
declare(strict_types=1);
namespace classes;

//classe para gatos que é filha da classe Animal
class Gato extends Animal{
    private string $corPelagem;

    //trait para logs
    use \traits\logavel;
    //trait para exibir dados do gato
    use \traits\informavel;

    //criar construtor
    public function __construct(string $nome, string $especie, int $idade, string $corPelagem){
        parent::__construct($nome, $especie, $idade);
        $this->corPelagem = $corPelagem;
        $mensagem = "Gato ".$this->nome." de pelagem ".$this->corPelagem." criado.";
        $this->adicionarLog($mensagem);
    }

    //getter retornando cor pelagem
    public function getCorPelagem() : string{
        return $this->corPelagem;
    }
}