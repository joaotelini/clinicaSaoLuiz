<?php

function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}

function validaCep($cep) {
    
    if (preg_match('/[0-9]{5,5}([-]?[0-9]{3})?$/', $cep)){
        return true;
    }
    else{
        return false;
    }

// Saída CEP válido 

}

function validaTelefone($telefone){
    $telefone= trim(str_replace('/', '', str_replace(' ', '', str_replace('-', '', str_replace(')', '', str_replace('(', '', $telefone))))));

    $regexTelefone = "^[0-9]{11}$";

    $regexCel = '/[0-9]{2}[6789][0-9]{3,4}[0-9]{4}/';
    if (preg_match($regexCel, $telefone)) {
        return true;
    }else{
        return false;
    }
}