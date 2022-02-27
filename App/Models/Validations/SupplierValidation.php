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
            $resultValidation->addError('name_supplier',"Nome: Este campo não pode ser vazio.");
        }
        
        if(empty($supplier->getSocialSupplier()))
        {
            $resultValidation->addError('social_supplier',"Razão Social: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getAdressSupplier()))
        {
            $resultValidation->addError('adress_supplier',"Endereço: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getCitySupplier()))
        {
            $resultValidation->addError('city_supplier',"Cidade: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getStateSupplier()))
        {
            $resultValidation->addError('state_supplier',"Estado: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getCnpjSupplier()))
        {
            $resultValidation->addError('cnpj_supplier',"CNPJ: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getEmailSupplier()))
        {
            $resultValidation->addError('email_supplier',"E-mail: Este campo não pode ser vazio.");
        }

        if(empty($supplier->getPhoneSupplier()))
        {
            $resultValidation->addError('phone_supplier',"Telefone: Este campo não pode ser vazio.");
        }

        return $resultValidation;
    }
}
