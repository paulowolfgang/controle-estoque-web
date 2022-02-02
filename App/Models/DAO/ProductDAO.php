<?php

namespace App\Models\DAO;

use App\Models\Entities\Product;

class ProductDAO extends BaseDAO
{   
    public function list($idProduct = null)
    {
        if($idProduct) {

            $result = $this->select(
                "SELECT * FROM produto WHERE id_produto = $idProduct"
            );

            return $result->fetchObject(Product::class);

        }else{

            $result = $this->select(
                'SELECT * FROM produto'
            );

            return $result->fetchAll(\PDO::FETCH_CLASS, Product::class);
            
        }

        return false;
    }

    public  function save(Product $product) {
        try {

            $refProduct         = $product->getRefProduct();
            $nameProduct        = $product->getNameProduct();
            $descriptionProduct = $product->getDescriptionProduct();
            $costPriceProduct   = $product->getCostPriceProduct();
            $salePriceProduct   = $product->getSalePriceProduct();
            $stockProduct       = $product->getStockProduct();
            $categoryProduct    = $product->getCategoryProduct();

            return $this->insert(
                'produto', // Nome da tabela do banco
                ":referencia_produto,:nome_produto,:descricao_produto,:custo_produto,:preco_produto,:quantidade_produto,:categoria_produto", // Colunas a serem populadas
                [
                    ':referencia_produto' =>$refProduct,
                    ':nome_produto'       =>$nameProduct,
                    ':descricao_produto'  =>$descriptionProduct,
                    ':custo_produto'      =>$costPriceProduct,
                    ':preco_produto'      =>$salePriceProduct,
                    ':quantidade_produto' =>$stockProduct,
                    ':categoria_produto'  =>$categoryProduct
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }
}
