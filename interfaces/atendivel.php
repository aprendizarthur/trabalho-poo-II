<?php
declare(strict_types=1);
namespace interfaces;

//interface que define métodos obrigatórios p/ classes que implementarem
interface Atendivel{
    public function atender() : void ;
    public function finalizarAtendimento() : void;
}