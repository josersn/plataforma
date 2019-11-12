<?php
 class Alunos{
     private $nome;
     private $email;
     private $ra;
     private $curso;
     private $cpf;
     private $dataNascimento ;
     private $contato;
     private $segundoContanto;

    public $erros;

     function cadAluno (){
        
     }
     public function validateStudent($nome, $email, $curso, $cpf, $dataNascimento, $contato, $segundoContanto) {
            $finalName = $this->validateNome($nome);
            $finalEmail = $this->validateEmail($email);
            //criar regra de negocio para curso
            $finalCurso = $curso;
            $finalCpf = $this->validateCPF($cpf);
            $finaldataNascimento = $this->validateCPF($dataNascimento);

            echo "fuuncionou";
            
    }

    public function validateNome($nome){
        if(is_string($nome)){
            return $nome;
        }else {
            $erros [] = [
                "Nome Inválido"
            ];
        }
    }

    public function validateEmail($email){
        if(strlen($email) > 7){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return $email;
            }else{
                $erros [] = [
                    "E-mail Inválido"
                ];

            }
        }else{
            $erros [] = [
                "E-mail Inválido"
            ];
        }
    }

    public function validateCPF($cpf = null) {

        if(empty($cpf)) {
            $erros [] = [
                "Insira o CPF"
            ];
        }
    
        // Elimina possivel mascara
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        
        // Verifica se o numero de digitos informados é igual a 11 
        if (strlen($cpf) != 11) {
            $erros [] = [
                "Insira um CPF válido"
            ];
        }
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            $erros [] = [
                "CPF inválido"
            ];
         // Calcula os digitos verificadores para verificar se o
         // CPF é válido
         } else {   
            
            for ($t = 9; $t < 11; $t++) {
                
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
    
            return $cpf;
        }
    }
    
    public function validateDataNascimento($dataNascimento) {
            $data = explode("/","$dataNascimento"); // fatia a string $dat em pedados, usando / como referência
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
        
            // verifica se a data é válida!
            // 1 = true (válida)
            // 0 = false (inválida)
            $res = checkdate($m,$d,$y);
            if ($res == 1){
               return $res;
            } else {
               $erros [ ] = [
                   "Data de nascimento "
               ];
            }
        
    }


 }
