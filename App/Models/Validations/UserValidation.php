<?php

namespace App\Models\Validations;

use \App\Models\Validations\ResultValidations;
use \App\Models\Entities\User;

class UserValidation{

    public function validate(User $user)
    {
        $resultValidation = new ResultValidation();

        if(empty($user->getNameUser()))
        {
            $resultValidation->addError('name_user',"Nome: Este campo não pode ser vazio.");
        }
        
        if(empty($user->getEmailUser()))
        {
            $resultValidation->addError('email_user',"E-mail: Este campo não pode ser vazio.");
        }

        if(empty($user->getPassUser()))
        {
            $resultValidation->addError('pass_user',"Senha: Este campo não pode ser vazio.");
        }

        return $resultValidation;
    }
}
