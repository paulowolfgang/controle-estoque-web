<?php

namespace App\Models\DAO;

//use App\Models\Entities\Supplier;

class SupplierDAO extends BaseDAO
{

    public  function save(Supplier $supplier) {
        try {

            $nameSupplier   = $user->getNameSupplier();
            $socialSupplier = $user->getSocialSupplier();
            $adressSupplier = $user->getAdressSupplier();
            $citySupplier   = $user->getCitySupplier();
            $stateSupplier  = $user->getStateSupplier();
            $cnpjSupplier   = $user->getCnpjSupplier();
            $emailSupplier  = $user->getEmailSupplier();
            $phoneSupplier  = $user->getPhoneSupplier();

            return $this->insert(
                'fornecedor', // Nome da tabela do banco
                ":nome_fantasia_fornecedor,:razao_social_fornecedor,:cnpj_fornecedor,:endereco_fornecedor,:cidade_fornecedor,:uf_fornecedor,:email_fornecedor,:telefone_fornecedor", // Colunas a serem populadas
                [
                    ':nome_fantasia_fornecedor' =>$nameSupplier,
                    ':razao_social_fornecedor'  =>$socialSupplier,
                    ':cnpj_fornecedor'          =>$adressSupplier,
                    ':endereco_fornecedor'      =>$citySupplier,
                    ':cidade_fornecedor'        =>$stateSupplier,
                    ':uf_fornecedor'            =>$cnpjSupplier,
                    ':email_fornecedor'         =>$emailSupplier,
                    ':telefone_fornecedor'      =>$phoneSupplier
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }
}
