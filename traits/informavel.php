<?php
declare(strict_types=1);
namespace traits;

use \classes\gato;
use \classes\cachorro;
use \classes\hospitalveterinario;

//trait responsável por exibir informações de animais
trait Informavel{
    
    //método para exibir informação individual do animal
    public function exibirInformacoes(){
        if($this instanceof Gato){
            echo "Informações do gato ".$this->getNome(). " : pelagem ".$this->getCorPelagem()." idade ".$this->getIdade()."<br>";
        }
        if($this instanceof Cachorro){
            echo "Informações do cachorro ".$this->getNome(). " : raça ".$this->getRaca()." idade ".$this->getIdade()."<br>";
        }
    }
}