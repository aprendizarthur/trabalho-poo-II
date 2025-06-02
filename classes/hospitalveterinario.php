<?php
declare(strict_types=1);
namespace classes;

//classe para o hospital veterinario com os principais métodos do exercício
class HospitalVeterinario{
    private string $nome;
    private array $animaisRegistrados = [];
    private array $donosRegistrados = [];

    //trait para logs
    use \traits\logavel;
    //trait para informações de animais
    use \traits\informavel;
    
    //método construtor
    public function __construct(string $nome){
        $this->nome = $nome;
        $this->animaisRegistrados = [];
        $this->donosRegistrados = [];

        $mensagem = "Hospital Veterinário ".$this->nome." criado.";
        $this->adicionarLog($mensagem);
    }

    //método atender cachorro
    public function atenderAnimal(Cachorro $cachorro, Dono $dono){
        $verificacaoDono = false;
        $verificacaoAnimal = false;

        foreach($this->animaisRegistrados as $registrado){
            if($registrado === $cachorro){
                $verificacaoAnimal = true;
            }
        }

        if($verificacaoAnimal == false){
            $mensagem = "Não foi possível iniciar o atendimento pois o animal não é registrado no hospital.";
            $this->adicionarLog($mensagem);  
            return;  
        }
        
        foreach($this->donosRegistrados as $registrado){
            if($registrado === $dono){
                $verificacaoDono = true;
            }
        }

        if($verificacaoDono == false){
            $mensagem = "Não foi possível iniciar o atendimento pois o dono não é registrado no hospital.";
            $this->adicionarLog($mensagem);
            return;  
        }

        if(!($cachorro->getDisponibilidade())){
            $mensagem = "Não foi possível iniciar o atendimento pois o animal não está disponível.";
            $this->adicionarLog($mensagem);
            return;
        }

        $cachorro->atender();
        $dono->novoAnimalAtendido($cachorro);
        $mensagem = "Hospital Veterinário ".$this->nome." atendeu o cachorro".$cachorro->getNome().", do dono ".$dono->getNome();
        $this->adicionarLog($mensagem);    
        
        $mensagem = "Para iniciar o atendimento tanto o dono quanto o animal precisam estar registrados no hospital.";
        $this->adicionarLog($mensagem);
    }

    //método para finalizar atendimento
    public function finalizarAtendimento(Cachorro $cachorro, Dono $dono){
        $verificacaoDono = false;
        $verificacaoAnimal = false;

        foreach($this->animaisRegistrados as $registrado){
            if($registrado === $cachorro){
                $verificacaoAnimal = true;
            }
        }

        if($verificacaoAnimal == false){
            $mensagem = "O animal não é registrado no hospital.";
            $this->adicionarLog($mensagem);  
            return;  
        }
        
        foreach($this->donosRegistrados as $registrado){
            if($registrado === $dono){
                $verificacaoDono = true;
            }
        }

        if($verificacaoDono == false){
            $mensagem = "O dono não é registrado no hospital.";
            $this->adicionarLog($mensagem);
            return;  
        }

        if($cachorro->getDisponibilidade()){
            $mensagem = "Não foi possível finalizar o atendimento pois o animal não está sendo atendido.";
            $this->adicionarLog($mensagem);
            return;
        }

        $cachorro->finalizarAtendimento();
        $mensagem = "Animal ".$cachorro->getNome()." teve seu atendimento finalizado.";
        $this->adicionarLog($mensagem);
    }
    
    //metodo registrar dono de animal no hospital
    public function registrarDonoAnimal(Dono $dono) : void{
        foreach($this->donosRegistrados as $registrado){
            if($registrado === $dono){
                $mensagem = "Erro de cadastro no Hospital Veterinário ".$this->nome.": dono ".$dono->getNome()." já registrado.";
                $this->adicionarLog($mensagem);
                return;
            }
        }

        $this->donosRegistrados[] = $dono;
        $mensagem = "Dono ".$dono->getNome()." registrado no Hospital Veterinário ".$this->nome;
        $this->adicionarLog($mensagem);
    }

    //metodo registrar animal no hospital
    public function registrarAnimal(Animal $animal) : void{
        foreach($this->animaisRegistrados as $registrado){
            if($registrado === $animal){
                $mensagem = "Animal ".$animal->getNome()." já registrado no Hospital Veterinário ".$this->nome.".";
                $this->adicionarLog($mensagem);
                return;
            }
        }

        $this->animaisRegistrados[] = $animal;
        $mensagem = $animal->getEspecie()." ".$animal->getNome()." registrado no Hospital Veterinário ".$this->nome.".";
        $this->adicionarLog($mensagem);                
        return;
    }

    //método para exibir informações de todos animais de um hospital veterinário
    public function exibirAnimaisHospital(){
        echo "Animais registrados no Hospital Veterinário ".$this->nome.": <br>";
        foreach($this->animaisRegistrados as $animal){
            if($animal instanceof Gato){
                echo "Informações do gato ".$animal->getNome(). " : pelagem ".$animal->getCorPelagem()." idade ".$animal->getIdade()."<br>";
            }
            if($animal instanceof Cachorro){
                echo "Informações do cachorro ".$animal->getNome(). " : raça ".$animal->getRaca()." idade ".$animal->getIdade()."<br>";
            }
        }
    }
}