<?php
declare(scrict_types=1);
namespace classes;

//classe para cachorros que é filha da classe Animal e implementa a interface Atendivel  (métodos obrigatórios)
class Cachorro extends Animal implements Atendivel{
    private $raca; 
    private $disponivel;
    //setar getter, construct c herdado, métodos interface
}