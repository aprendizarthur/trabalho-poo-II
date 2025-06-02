<?php
declare(strict_types=1);
namespace traits;

//trait responsável por armazenar e exibir logs do sistema
trait Logavel{
    private array $logs = [];
    //método adicionar log para array de logs
    public function adicionarLog(string $mensagem){
        $this->logs[] = $mensagem;
    }

    //método retornar todos os logs
    public function getLogs(){
        return $this->logs;
    }
}