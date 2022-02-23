<?php

namespace App\Models\DAO;

use App\Models\Entities\Supplier;

class SupplierDAO extends BaseDAO
{
    public  function save(Supplier $supplier) {
        try {

            $nameSupplier   = $supplier->getNameSupplier();
            $socialSupplier = $supplier->getSocialSupplier();
            $adressSupplier = $supplier->getAdressSupplier();
            $citySupplier   = $supplier->getCitySupplier();
            $stateSupplier  = $supplier->getStateSupplier();
            $cnpjSupplier   = $supplier->getCnpjSupplier();
            $emailSupplier  = $supplier->getEmailSupplier();
            $phoneSupplier  = $supplier->getPhoneSupplier();

            return $this->insert(
                'fornecedor', // Nome da tabela do banco
                ":nome_fantasia_fornecedor,:razao_social_fornecedor,:cnpj_fornecedor,:endereco_fornecedor,:cidade_fornecedor,:uf_fornecedor,:email_fornecedor,:telefone_fornecedor", // Colunas a serem populadas
                [
                    ':nome_fantasia_fornecedor' =>$nameSupplier,
                    ':razao_social_fornecedor'  =>$socialSupplier,
                    ':cnpj_fornecedor'          =>$cnpjSupplier,
                    ':endereco_fornecedor'      =>$adressSupplier,
                    ':cidade_fornecedor'        =>$citySupplier,
                    ':uf_fornecedor'            =>$stateSupplier,
                    ':email_fornecedor'         =>$emailSupplier,
                    ':telefone_fornecedor'      =>$phoneSupplier
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }
}
