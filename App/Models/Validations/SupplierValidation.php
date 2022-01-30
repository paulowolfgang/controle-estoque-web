<?php

namespace App\Models\Validations;

use \App\Models\Validations\ResultValidations;
use \App\Models\Entities\Supplier;

class SupplierValidation{

    public function validate(Supplier $supplier)
    {
        $resultValidation = new ResultValidation();

        if(empty($supplier->getNameSupplier()))
        {
            $resultValidation->addError('nameSupplier',"Nome: Este campo não pode ser vazio.");
        }
        
        if(empty($supplier->getSocialSupplier()))
        {
            $resultValidation->addError('socialSupplier',"Razão Social: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getAdressSupplier()))
        {
            $resultValidation->addError('adressSupplier',"Endereço: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getCitySupplier()))
        {
            $resultValidation->addError('citySupplier',"Cidade: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getStateSupplier()))
        {
            $resultValidation->addError('stateSupplier',"Estado: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getCnpjSupplier()))
        {
            $resultValidation->addError('cnpjSupplier',"CNPJ: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getEmailSupplier()))
        {
            $resultValidation->addError('emailSupplier',"E-mail: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getPhoneSupplier()))
        {
            $resultValidation->addError('phoneSupplier',"Telefone: Este campo não pode ser vazio.");
        }

        return $resultValidation;
    }
}
