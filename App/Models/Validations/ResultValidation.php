<?php

namespace App\Models\Validations;

class ResultValidation{

    private $erros = [];
    
    public function addError($field, $message){
        $this->erros[$field] = $message;
    }

    public function getErros(){
        return $this->erros;
    }

}
