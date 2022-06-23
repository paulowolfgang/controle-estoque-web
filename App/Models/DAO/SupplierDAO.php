<?php

namespace App\Models\DAO;

use App\Models\Entities\Supplier;

class SupplierDAO extends BaseDAO
{
    public function list($id_supplier = null)
    {
        if($id_supplier)
        {
            $result = $this->select(
                "SELECT * FROM supplier WHERE id_supplier = $id_supplier"
            );

            return $result->fetchObject(Supplier::class);

        } else {

            $result = $this->select(
                "SELECT * FROM supplier"
            );

            return $result->fetchAll(\PDO::FETCH_CLASS, Supplier::class);
            
        }

        return false;
    }
    
    public  function save(Supplier $supplier) {
        try {

            $name_supplier   = $supplier->getNameSupplier();
            $social_supplier = $supplier->getSocialSupplier();
            $adress_supplier = $supplier->getAdressSupplier();
            $city_supplier   = $supplier->getCitySupplier();
            $state_supplier  = $supplier->getStateSupplier();
            $cnpj_supplier   = $supplier->getCnpjSupplier();
            $email_supplier  = $supplier->getEmailSupplier();
            $phone_supplier  = $supplier->getPhoneSupplier();

            return $this->insert(
                'supplier', // Nome da tabela do banco
                ":name_supplier,:social_supplier,:cnpj_supplier,:adress_supplier,:city_supplier,:state_supplier,:email_supplier,:phone_supplier", // Colunas a serem populadas
                [
                    ':name_supplier'   =>$name_supplier,
                    ':social_supplier' =>$social_supplier,
                    ':cnpj_supplier'   =>$cnpj_supplier,
                    ':adress_supplier' =>$adress_supplier,
                    ':city_supplier'   =>$city_supplier,
                    ':state_supplier'  =>$state_supplier,
                    ':email_supplier'  =>$email_supplier,
                    ':phone_supplier'  =>$phone_supplier
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }

    public function toupdate(Supplier $supplier) 
    {
        try
        {   
            $name_supplier   = $supplier->getNameSupplier();
            $social_supplier = $supplier->getSocialSupplier();
            $adress_supplier = $supplier->getAdressSupplier();
            $city_supplier   = $supplier->getCitySupplier();
            $state_supplier  = $supplier->getStateSupplier();
            $cnpj_supplier   = $supplier->getCnpjSupplier();
            $email_supplier  = $supplier->getEmailSupplier();
            $phone_supplier  = $supplier->getPhoneSupplier();

            return $this->update(
                'supplier',
                "name_supplier = :name_supplier, social_supplier = :social_supplier, adress_supplier = :adress_supplier, city_supplier = :city_supplier, state_supplier = :state_supplier, cnpj_supplier = :cnpj_supplier, email_supplier = :email_supplier, phone_supplier = :phone_supplier",
                [
                    ':name_supplier'=>$name_supplier,
                    ':social_supplier'=>$social_supplier,
                    ':adress_supplier'=>$adress_supplier,
                    ':city_supplier'=>$city_supplier,
                    ':state_supplier'=>$state_supplier,
                    ':cnpj_supplier'=>$cnpj_supplier,
                    ':email_supplier'=>$email_supplier,
                    ':phone_supplier'=>$phone_supplier,
                ],
                "name_supplier = :name_supplier"
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao salvar os dados.", 500);
        }
    }

    public function exclusion(Supplier $supplier)
    {
        try {
            $id_supplier = $supplier->getIdSupplier();

            return $this->delete('supplier',"id_supplier = $id_supplier");

        }catch (Exception $e){
            throw new \Exception("Erro ao deletar o fornecedor", 500);
        }
    }

    public function totalSuppliers()
    {
        $query = $this->select(
            "SELECT COUNT(id_supplier) FROM supplier"
        );

        return $query->fetchColumn();
    }
}
