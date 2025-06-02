<?php
declare(strict_types=1);
require("vendor/autoload.php");

use classes\animal;
use classes\gato;
use classes\cachorro;
use classes\dono;
use classes\hospitalveterinario;
use interfaces\atendivel;
use traits\informavel;
use traits\logavel;

//criando hospital veterinário
$hospitalVETMED = new HospitalVeterinario("VetMed");

//criando novo dono de animal
$donoJose = new Dono("José da Silva Alencar", "024.291.200-49");

//criando novo animal
$gatoAmarelo = new Gato("Mingau", "Gato", 5, "Laranja");
$cachorroPitbull = new Cachorro("Trovão", "Cachorro", 12, "Pitbull");

//exibindo informações do animal
$gatoAmarelo->exibirInformacoes();
$cachorroPitbull->exibirInformacoes();

//registrando dono de animal no hospital veterinário
$hospitalVETMED->registrarDonoAnimal($donoJose);
$hospitalVETMED->registrarDonoAnimal($donoJose);

//registrando animal no hospital veterinário
$hospitalVETMED->registrarAnimal($gatoAmarelo);
$hospitalVETMED->registrarAnimal($gatoAmarelo);
$hospitalVETMED->registrarAnimal($cachorroPitbull);


//mostrando animais registrados no hospital veterinário
$hospitalVETMED->exibirAnimaisHospital();

//atendendo animais
$hospitalVETMED->atenderAnimal($cachorroPitbull, $donoJose);
$hospitalVETMED->atenderAnimal($cachorroPitbull, $donoJose);

//finalizando atendimento
$hospitalVETMED->finalizarAtendimento($cachorroPitbull, $donoJose);
$hospitalVETMED->finalizarAtendimento($cachorroPitbull, $donoJose);

//exibindo logs do hospital
echo "<h3>Logs do Hospital:</h3>";
$logs = $hospitalVETMED->getLogs();
foreach ($logs as $log) {
    echo $log . "<br>";
}

//exibindo logs do dono José
echo "<h3>Logs do Dono José:</h3>";
$logs = $donoJose->getLogs();
foreach ($logs as $log) {
    echo $log . "<br>";
}

//exibindo logs do cachorro Trovão
echo "<h3>Logs do Cachorro Trovão:</h3>";
$logs = $cachorroPitbull->getLogs();
foreach ($logs as $log) {
    echo $log . "<br>";
}

//exibindo logs do gato Mingau
echo "<h3>Logs do Gato Mingau:</h3>";
$logs = $gatoAmarelo->getLogs();
foreach ($logs as $log) {
    echo $log . "<br>";
}

