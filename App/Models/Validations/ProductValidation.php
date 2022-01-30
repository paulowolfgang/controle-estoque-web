<?php

namespace App\Models\Validations;

use \App\Models\Validations\ResultValidations;
use \App\Models\Entities\Product;

class ProductValidation{

    public function validate(Product $product)
    {
        $resultValidation = new ResultValidation();

        if(empty($product->getRefProduct()))
        {
            $resultValidation->addError('refProduct',"Referência: Este campo não pode ser vazio.");
        }
        
        if(empty($product->getNameProduct()))
        {
            $resultValidation->addError('nameProduct',"Nome: Este campo não pode ser vazio.");
        }

        if(empty($product->getDescriptionProduct()))
        {
            $resultValidation->addError('descriptionProduct',"Descrição: Este campo não pode ser vazio.");
        }

        if(empty($product->getCostPriceProduct()))
        {
            $resultValidation->addError('costPriceProduct',"Preço de custo: Este campo não pode ser vazio.");
        }

        if(empty($product->getSalePriceProduct()))
        {
            $resultValidation->addError('salePriceProduct',"Preço de revenda: Este campo não pode ser vazio.");
        }

        if(empty($product->getStockProduct()))
        {
            $resultValidation->addError('stockProduct',"Quantidade: Este campo não pode ser vazio.");
        }

        return $resultValidation;
    }
}
