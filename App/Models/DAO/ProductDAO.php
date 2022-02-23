<?php

namespace App\Models\DAO;

use App\Models\Entities\Product;

class ProductDAO extends BaseDAO
{   
    public function list($id_product = null)
    {
        if($id_product)
        {
            $result = $this->select(
                "SELECT ref_product, name_product, stock_product FROM product WHERE id_product = $id_product"
            );

            return $result->fetchObject(Product::class);

        } else {

            $result = $this->select(
                "SELECT * FROM product"
            );

            return $result->fetchAll(\PDO::FETCH_CLASS, Product::class);
            
        }

        return false;
    }

    public  function save(Product $product) {
        try {

            $ref_product          = $product->getRefProduct();
            $name_product         = $product->getNameProduct();
            $description_product  = $product->getDescriptionProduct();
            $cost_price_product   = $product->getCostPriceProduct();
            $sale_price_product   = $product->getSalePriceProduct();
            $stock_product        = $product->getStockProduct();
            $category_product     = $product->getCategoryProduct();

            return $this->insert(
                'product', // Nome da tabela do banco
                ":ref_product,:name_product,:description_product,:cost_price_product,:sale_price_product,:stock_product,:category_product", // Colunas a serem populadas
                [
                    ':ref_product'         =>$ref_product,
                    ':name_product'        =>$name_product,
                    ':description_product' =>$description_product,
                    ':cost_price_product'  =>$cost_price_product,
                    ':sale_price_product'  =>$sale_price_product,
                    ':stock_product'       =>$stock_product,
                    ':category_product'    =>$category_product
                ]
            );

        }catch (\Exception $e){
            throw new \Exception("Erro ao cadastrar os dados.", 500);
        }
    }
}
